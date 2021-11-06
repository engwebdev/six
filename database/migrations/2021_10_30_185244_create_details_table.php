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
            $table->id();
            $table->unsignedBigInteger( 'normal_product_id' )->nullable();
            $table->string( 'normal_product_name' )->nullable();
            $table->unsignedBigInteger( 'normal_product_attribute_name_id' )->nullable();
            $table->string( 'normal_product_attribute_name' )->nullable();
            $table->unsignedBigInteger( 'normal_product_attribute_value_id' )->nullable();
            $table->string( 'normal_product_attribute_value' )->nullable();

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
        Schema::dropIfExists('details');
    }
}
