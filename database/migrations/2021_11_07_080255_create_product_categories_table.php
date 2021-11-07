<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->id();
            $table->string('product_category_name')->nullable();
            $table->unsignedBigInteger('product_category_additional_user_id')->nullable();

            $table->unsignedBigInteger('product_categoryable_id')->nullable()->comment('ای دی محصول مورد تایی');
            $table->string('product_categoryable_type')->nullable()->comment('نوع موجودیت محصول');

            $table->string('product_category_additional_user_type')->nullable();
            $table->boolean('product_category_accept_status')->nullable();
            $table->enum('product_category_show_status', ['private', 'public'])->nullable();

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
        Schema::dropIfExists('product_categories');
    }
}
