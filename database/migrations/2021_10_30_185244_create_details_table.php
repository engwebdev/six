<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('productable_id')->nullable();
            $table->string('productable_type')->nullable();
            $table->string('product_name')->nullable();
            $table->unsignedBigInteger('product_attribute_name_id')->nullable();
            $table->string('product_attribute_name')->nullable();
            $table->unsignedBigInteger('product_attribute_value_id')->nullable();
            $table->string('product_attribute_value')->nullable();
            $table->string('priceable')->nullable();
            $table->string('price_type')->nullable();
            $table->unsignedInteger('price_id')->nullable();
            $table->float('price_value', 20, 2)->nullable();
            $table->enum('detail_type', ['normalProduct', 'customizeProduct', 'task'])->nullable();

            $table->softDeletes();
            $table->timestamps();

            // when 'attributes' table making
//            $table->foreign('product_attribute_name_id')
//                ->references('id')
//                ->on('attributes')
//                ->onDelete('no action')
//                ->onUpdate('cascade');

            // when 'attribute_values' table making
//            $table->foreign('product_attribute_value_id')
//                ->references('id')
//                ->on('attribute_values')
//                ->onDelete('no action')
//                ->onUpdate('cascade');

            // when 'product_price_history' table making
//            $table->foreign('price_id')
//                ->references('id')
//                ->on('product_price_history')
//                ->onDelete('no action')
//                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details');
    }
}
