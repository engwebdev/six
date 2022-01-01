<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('shop_id')->nullable();
            $table->integer('shop_image_index_point')->nullable();
            $table->string('shop_image_url')->nullable();
            $table->string('shop_image_type')->nullable();
            $table->string('shop_image_format')->nullable();
            $table->string('shop_image_size')->nullable();
            $table->string('shop_image_resolution')->nullable();
            $table->string('shop_image_old_name')->nullable();
            $table->string('shop_image_new_name')->nullable();
            $table->unsignedBigInteger('shop_image_uploader_user_id')->nullable();
            $table->boolean('shop_image_accept_status')->nullable();
            $table->boolean('shop_image_active_status')->nullable();
            $table->boolean('shop_image_publish_status')->nullable();
            $table->string('shop_image_thumbnail_url')->nullable();
            $table->string('shop_image_thumbnail_name')->nullable();

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('shop_id')
                ->references('id')
                ->on('shops')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('shop_image_uploader_user_id')
                ->references('id')
                ->on('users')
                ->onDelete('no action')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_images');
    }
}
