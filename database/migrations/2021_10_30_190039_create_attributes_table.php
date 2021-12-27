<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->bigIncrements();
            $table->string('attribute_name')->nullable();
            $table->string('attribute_additional_user_id')->nullable();
            $table->string('attribute_additional_type')->nullable();
            $table->boolean('attribute_status_accept')->nullable();
            $table->boolean('attribute_publish_status')->nullable();

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('attribute_additional_user_id')
                ->references('id')
                ->on('users')
                ->onDelete('no action')
                ->onUpdate('cascade');
        });

        // moved from details table to here
        Schema::create('details', function (Blueprint $table) {
            $table->foreign('product_attribute_name_id')
                ->references('id')
                ->on('attributes')
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
        Schema::dropIfExists('attributes');
    }
}
