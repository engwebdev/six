<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'tasks', function (Blueprint $table) {
            $table->id();
            $table->string( 'task_name' )->nullable();
            $table->string( 'task_description' )->nullable();
            $table->string( 'task_info' )->nullable();
            $table->string( 'task_note' )->nullable();

            $table->boolean( 'task_status_accept' )->nullable()->default( false )->comment( 'تایید / رد' );
            $table->unsignedBigInteger( 'task_status_confirm_user_id' )->nullable()->comment( 'ای دی کاربر سیستم تایید کننده - رلیشن با جدول' );
            $table->unsignedBigInteger( 'custom_services_id' )->nullable()->comment( 'ای دی سروریس سفارشی - رلیشن با جدول' );
            $table->string( 'task_status_confirm_user_comment' )->nullable()->comment( 'اخرین نظر کاربر تایید کننده - رلیشن با جدول' );
            $table->boolean( 'task_status_publish' )->nullable()->default( false )->comment( 'وضعیت انتشار - برای زمان موجود عدم موجود' );
            $table->string( 'task_status_publish_date' )->nullable()->comment( 'تاریخ تایید انتشار' );
            $table->integer( 'task_last_base_price' )->nullable()->comment( 'اخرین قیمت پایه از جدول قیمتها' );
            $table->string( 'task_last_base_price_date' )->nullable()->comment( 'تاریخ وارد کردن اخرین قیمت پایه از جدول قیمتها' );
            $table->boolean( 'task_status_base_price_discount' )->nullable()->default( false )->comment( 'تخفیف دارد / ندارد' );
            $table->float( 'task_last_base_price_discount_percentage', 4, 2 )->nullable()->comment( 'مقدار تخفیف به درصد' );
            $table->string( 'task_last_base_price_discount_type' )->nullable()->comment( 'نوع تخفیف' );
            $table->unsignedBigInteger( 'task_unit_of_measurement_id' )->nullable()->comment( 'ای دی اسم واحد اندازه گیری از جدول اطلاعات پایه واحد' );
            $table->string( 'task_unit_of_measurement_name' )->nullable()->comment( 'اسم واحد انازه گیری مثل متر' );
            $table->string( 'task_index_image_url' )->nullable()->comment( 'ادرس تصویر شاخص از جدول تصاویر' );
            $table->unsignedBigInteger( 'task_category_id' )->nullable()->comment( 'ای دی دسته بندی محصول از دسته بندی های محصولات' );
            $table->string( 'task_category_name' )->nullable()->comment( 'نام دسته بندی تسک از دسته بندی های تسکها' );
            $table->unsignedBigInteger( 'task_shop_id' )->nullable();
            $table->unsignedBigInteger( 'task_registry_shopkeeper_id' )->nullable();
            $table->integer( 'task_quantity_sold' )->nullable()->comment( 'تعداد فروخته شده' );
            $table->integer( 'task_quantity_selling' )->nullable()->comment( 'تعداد در حال فروش' );
            $table->integer( 'task_quantity_returned' )->nullable()->comment( 'تعداد برگشتی' );
            $table->integer( 'task_number_comments' )->nullable()->comment( 'تعداد نظرات یا امتیازها رلیشن با جدول نظرات' );
            $table->float( 'task_total_points', 16, 5 )->nullable()->comment( 'مجموع امتیازها' );
            $table->float( 'task_average_points', 7, 5 )->nullable()->comment( 'متوسط امتیازها' );
            $table->float( 'task_last_point', 6, 5 )->nullable()->comment( 'اخرین امتیاز' );

            $table->softDeletes();
            $table->timestamps();


            $table->foreign( 'task_status_confirm_user_id' )
                ->references( 'id' )
                ->on( 'users' )
                ->onDelete( 'set null' );

//            $table->foreign( 'task_category_id' )
//                ->references( 'id' )
//                ->on( 'task_categories' )
//                ->onDelete( 'set null' );

            $table->foreign( 'task_shop_id' )
                ->references( 'id' )
                ->on( 'shops' )
                ->onDelete( 'set null' );

            $table->foreign( 'task_registry_shopkeeper_id' )
                ->references( 'id' )
                ->on( 'users' )
                ->onDelete( 'set null' );

            $table->foreign( 'custom_services_id' )
                ->references( 'id' )
                ->on( 'custom_services' )
                ->onDelete( 'set null' );
            // todo add new table after this table for (task_categories - ...)
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table( 'tasks', function (Blueprint $table) {
            Schema::dropIfExists( 'tasks' );
        } );
    }
}
