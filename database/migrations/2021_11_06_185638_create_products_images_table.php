<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_images', function (Blueprint $table) {
            $table->bigIncrements();
            $table->unsignedBigInteger('products_imageable_id')->nullable()->comment('ای دی محصولی ک قیمت دارد');
            $table->string('products_imageable_type')->nullable()->comment('نوع موجودیت محصول');
            $table->string('image_url')->nullable()->comment('');
            $table->string('image_thumbnail_url')->nullable()->comment('ادرس تصویر بند انگشتی');
            $table->unsignedInteger('image_index_param')->nullable()->comment('هر چی بزرگتر در اولویت بیشتر');
            $table->string('image_type')->nullable()->comment('نوع تصویر');
            $table->string('image_format')->nullable()->comment('فرمت فایل');
            $table->string('image_size')->nullable()->comment('سایز فایل');
            $table->string('image_resolution')->nullable()->comment('مقدار رزولوشن');
            $table->string('file_name')->nullable()->comment('نام فایل هنگام دریافت');
            $table->unsignedBigInteger('uploader_user_id')->nullable()->comment('کاربر');
            $table->string('uploader_user_date')->nullable()->comment('تاریخ');
            $table->boolean('activate_status')->nullable()->comment('فعال / غیرفعال');
            $table->boolean('accept_status')->nullable()->comment('تاببد / رد');
            $table->boolean('publish_status')->nullable()->comment('منتشر / عدم انتشار');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_images');
    }
}
