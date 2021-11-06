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
            $table->id();
            $table->string( 'attribute_name' )->nullable();
            $table->string( 'attribute_additional_type' )->nullable();
            $table->string( 'attribute_additional_user' )->nullable();
            $table->string( 'attribute_publish_status' )->nullable();
            $table->string( 'attribute_status_accept' )->nullable();

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
        Schema::dropIfExists('attributes');
    }
}
