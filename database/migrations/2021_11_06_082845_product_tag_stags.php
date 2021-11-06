<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductTagsTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_tags_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->unsignedBigInteger('tag_id')->nullable();
            $table->string('product_type');
            $table->boolean('product_tags_tags_status');
            $table->softDeletes();
            $table->timestamps();

//            $table->morphs('product_id', 'product_id')->();
//            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_tags_tags');

    }
}
