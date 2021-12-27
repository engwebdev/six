<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNormalProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('normal_products', function (Blueprint $table) {
            $table->id();
            $table->string('normal_product_name')->nullable();
            $table->string('normal_product_description')->nullable();
            $table->string('normal_product_info')->nullable();
            $table->string('normal_product_note')->nullable();
            $table->boolean('normal_product_status_accept')->nullable()->default(false)->comment('تایید / رد');
            $table->unsignedBigInteger('normal_product_status_confirm_user_id')->nullable()->comment('ای دی کاربر سیستم تایید کننده - رلیشن با جدول');
            $table->string('normal_product_status_confirm_user_comment')->nullable()->comment('اخرین نظر کاربر تایید کننده - رلیشن با جدول');
            $table->boolean('normal_product_status_publish')->nullable()->default(false)->comment('وضعیت انتشار - برای زمان موجود عدم موجود');
            $table->string('normal_product_status_publish_date')->nullable()->comment('تاریخ تایید انتشار');
            $table->float('normal_product_last_price', 20, 2)->nullable()->comment('اخرین قیمت از جدول قیمتها');
            $table->string('normal_product_last_price_date')->nullable()->comment('تاریخ وارد کردن اخرین قیمت از جدول قیمتها');
            $table->boolean('normal_product_status_price_discount')->nullable()->default(false)->comment('تخفیف دارد / ندارد');
            $table->float('normal_product_last_price_discount_percentage', 4, 2)->nullable()->comment('مقدار تخفیف به درصد');
            $table->string('normal_product_last_price_discount_type')->nullable()->comment('نوع تخفیف');
            $table->string('normal_product_index_image_url')->nullable()->comment('ادرس تصویر شاخص از جدئل تصاویر');
            $table->unsignedBigInteger('normal_product_category_id')->nullable()->comment('ای دی دسته بندی محصول از دسته بندی های محصولات');
            $table->string('normal_product_category_name')->nullable();
            $table->unsignedBigInteger('normal_product_shop_id')->nullable();
            $table->unsignedBigInteger('normal_product_registry_user_id')->nullable();
            $table->integer('normal_product_quantity_total')->nullable()->comment('تعداد کل وارد شده توسط کاربر');
            $table->integer('normal_product_quantity_sold')->nullable()->comment('تعداد فروخته شده');
            $table->integer('normal_product_quantity_selling')->nullable()->comment('تعداد در حال فروش');
            $table->integer('normal_product_quantity_returned')->nullable()->comment('تعداد برگشتی');
            $table->integer('normal_product_number_comments')->nullable()->comment('تعداد نظرات یا امتیازها رلیشن با جدول نظرات');
            $table->float('normal_product_total_points', 16, 5)->nullable()->comment('مجموع امتیازها');
            $table->float('normal_product_average_points', 7, 5)->nullable()->comment('متوسط امتیازها');
            $table->float('normal_product_last_point', 6, 5)->nullable()->comment('اخرین امتیاز');

            $table->softDeletes();
            $table->timestamps();


            $table->foreign('normal_product_status_confirm_user_id')
                ->references('id')
                ->on('users')
                ->onDelete('no action')
                ->onUpdate('cascade');

//            $table->foreign('normal_product_category_id')
//                ->references('id')
//                ->on('product_categories')
//                ->onDelete('no action')
//                ->onUpdate('cascade');

            $table->foreign('normal_product_shop_id')
                ->references('id')
                ->on('shops')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('normal_product_registry_user_id')
                ->references('id')
                ->on('users')
                ->onDelete('no action')
                ->onUpdate('cascade');
            // todo add new table after this table for (product_categories - ...)
//            $table->foreign( '' )
//                ->references( 'id' )
//                ->on( '' )
//                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('normal_products');
    }
}
