<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_tags', function (Blueprint $table) {
            $table->id();
            $table->string('product_tag_name')->nullable();
            $table->string('product_tag_image_url')->nullable();
            $table->boolean('product_tag_publish_status')->nullable();
            $table->boolean('product_tag_accept_status')->nullable();
            $table->unsignedBigInteger('product_tag_additional_user_id')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('product_tag_additional_user_id')
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
        Schema::drop('product_tags');
    }
}
