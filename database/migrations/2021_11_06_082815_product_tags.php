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
            $table->string('product_tag_name');
            $table->string('product_tag_image_url');
            $table->boolean('product_tag_publish_status');
            $table->boolean('product_tag_accept_status');
            $table->boolean('product_tag_additional_type');
            $table->unsignedBigInteger('product_tag_additional_user_id');
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
        Schema::drop('product_tags');
    }
}
