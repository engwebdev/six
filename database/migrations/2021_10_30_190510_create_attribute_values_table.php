<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributeValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribute_values', function (Blueprint $table) {
            $table->id();
            $table->string( 'attribute_value_name' )->nullable();
            $table->string( 'attribute_value_additional_type' )->nullable();
            $table->string( 'attribute_value_additional_user' )->nullable();
            $table->string( 'attribute_value_publish_status' )->nullable();
            $table->string( 'attribute_value_status_accept' )->nullable();

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
        Schema::dropIfExists('attribute_values');
    }
}
