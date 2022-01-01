<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductTagTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_tags_tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_tag_id')->nullable();
            $table->unsignedBigInteger('productable_id')->nullable();
            $table->string('productable_type')->nullable();
            $table->unsignedBigInteger('product_tag_tags_confirm_user_id')->nullable();
            $table->boolean('product_tags_tags_status')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('product_tag_id')
                ->references('id')
                ->on('product_tags')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('product_tag_tags_confirm_user_id')
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
        Schema::drop('product_tag_tags');

    }
}
