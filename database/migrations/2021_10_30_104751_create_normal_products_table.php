<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNormalProductsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'normal_products', function (Blueprint $table) {
            $table->id();
            $table->string( 'product_name' )->nullable();
            $table->string( 'product_description' )->nullable();
            $table->string( 'product_info' )->nullable();
            $table->string( 'product_note' )->nullable();
            $table->boolean( 'product_status_accept' )->nullable()->default( false )->comment( 'تایید / رد' );
            $table->unsignedBigInteger( 'product_status_confirm_user_id' )->nullable()->comment( 'ای دی کاربر سیستم تایید کننده - رلیشن با جدول' );
            $table->string( 'product_status_confirm_user_comment' )->nullable()->comment( 'اخرین نظر کاربر تایید کننده - رلیشن با جدول' );
            $table->boolean( 'product_status_publish' )->nullable()->default( false )->comment( 'وضعیت انتشار - برای زمان موجود عدم موجود' );
            $table->string( 'product_status_publish_date' )->nullable()->comment( 'تاریخ تایید انتشار' );
            $table->integer( 'product_last_price' )->nullable()->comment( 'اخرین قیمت از جدول قیمتها' );
            $table->string( 'product_last_price_date' )->nullable()->comment( 'تاریخ وارد کردن اخرین قیمت از جدول قیمتها' );
            $table->boolean( 'product_status_price_discount' )->nullable()->default( false )->comment( 'تخفیف دارد / ندارد' );
            $table->float( 'product_last_price_discount_percentage', 4, 2 )->nullable()->comment( 'مقدار تخفیف به درصد' );
            $table->string( 'product_last_price_discount_type' )->nullable()->comment( 'نوع تخفیف' );
            $table->string( 'product_index_image_url' )->nullable()->comment( 'ادرس تصویر شاخص از جدئل تصاویر' );
            $table->unsignedBigInteger( 'product_category_id' )->nullable()->comment( 'ای دی دسته بندی محصول از دسته بندی های محصولات' );
            $table->unsignedBigInteger( 'product_shop_id' )->nullable();
            $table->unsignedBigInteger( 'product_registry_shopkeeper_id' )->nullable();
            $table->integer( 'product_quantity_total' )->nullable()->comment( 'تعداد کل وارد شده توسط کاربر' );
            $table->integer( 'product_quantity_sold' )->nullable()->comment( 'تعداد فروخته شده' );
            $table->integer( 'product_quantity_selling' )->nullable()->comment( 'تعداد در حال فروش' );
            $table->integer( 'product_quantity_returned' )->nullable()->comment( 'تعداد برگشتی' );
            $table->integer( 'product_number_comments' )->nullable()->comment( 'تعداد نظرات یا امتیازها رلیشن با جدول نظرات' );
            $table->float( 'product_total_points', 16, 5 )->nullable()->comment( 'مجموع امتیازها' );
            $table->float( 'product_average_points', 7, 5 )->nullable()->comment( 'متوسط امتیازها' );
            $table->float( 'product_last_point', 6, 5 )->nullable()->comment( 'اخرین امتیاز' );

            $table->softDeletes();
            $table->timestamps();


            $table->foreign( 'product_status_confirm_user_id' )
                ->references( 'id' )
                ->on( 'users' )
                ->onDelete( 'set null' );

//            $table->foreign( 'product_category_id' )
//                ->references( 'id' )
//                ->on( 'product_categories' )
//                ->onDelete( 'set null' );

            $table->foreign( 'product_shop_id' )
                ->references( 'id' )
                ->on( 'shops' )
                ->onDelete( 'set null' );

            $table->foreign( 'product_registry_shopkeeper_id' )
                ->references( 'id' )
                ->on( 'users' )
                ->onDelete( 'set null' );

            // todo add new table after this table for (product_categories - ...)
//            $table->foreign( '' )
//                ->references( 'id' )
//                ->on( '' )
//                ->onDelete('set null');
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists( 'normal_products' );
    }
}
