<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategoryAndProductsAndShops extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_products_shops', function (Blueprint $table) {
            $table->bigIncrements();

            $table->unsignedBigInteger('shop_id')->nullable();
            $table->unsignedBigInteger('product_category_id')->nullable();
            $table->string('product_category_name')->nullable();
            $table->unsignedBigInteger('productable_id')->nullable();
            $table->string('productable_type')->nullable();
            $table->string('product_name')->nullable();
            $table->boolean('accept_status')->nullable();
            $table->boolean('publish_status')->nullable();

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('shop_id')
                ->references('id')
                ->on('shops')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('product_category_id')
                ->references('id')
                ->on('product_categories')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->index(['productable_id', 'productable_type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_category_and_products_and_shops');
    }
}
