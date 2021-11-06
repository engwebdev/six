<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeAttributesColmun extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('attributes', function (Blueprint $table) {
            $table->boolean('attribute_publish_status')->change();
            $table->boolean('attribute_status_accept')->change();
        });
        Schema::table('attribute_values', function (Blueprint $table) {
            $table->boolean('attribute_value_publish_status')->change();
            $table->boolean('attribute_value_status_accept')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attributes', function (Blueprint $table) {
            //
        });
    }
}
