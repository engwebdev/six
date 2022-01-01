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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('attribute_id')->nullable();
            $table->string('attribute_name')->nullable();
            $table->string( 'attribute_value_name' )->nullable();
            $table->unsignedBigInteger( 'attribute_value_additional_user_id' )->nullable();
            $table->string( 'attribute_value_additional_type' )->nullable();
            $table->boolean( 'attribute_value_status_accept' )->nullable();
            $table->boolean( 'attribute_value_publish_status' )->nullable();

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('attribute_id')
                ->references('id')
                ->on('attributes')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('attribute_value_additional_user_id')
                ->references('id')
                ->on('users')
                ->onDelete('no action')
                ->onUpdate('cascade');
        });

        // moved from details table to here
        Schema::table('details', function (Blueprint $table) {
            $table->foreign('product_attribute_value_id')
                ->references('id')
                ->on('attribute_values')
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
        Schema::dropIfExists('attribute_values');
    }
}
