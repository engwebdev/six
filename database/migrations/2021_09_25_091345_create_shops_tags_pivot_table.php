<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTagsPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_shop_tags', function (Blueprint $table) {
            $table->bigIncrements();
            $table->unsignedBigInteger('shop_id')->nullable();
            $table->unsignedBigInteger('tag_id')->nullable();
            $table->boolean('tag_accept_status')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('shop_id')
                ->references('id')
                ->on('shops')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('tag_id')
                ->references('id')
                ->on('shop_tags')
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
        Schema::dropIfExists('shops_tags');
    }
}
