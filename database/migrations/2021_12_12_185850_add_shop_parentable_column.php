<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddShopParentableColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops_owen_shops', function (Blueprint $table) {
            $table->bigIncrements();
            $table->string('type_shop_top');
            $table->unsignedBigInteger('top_shop_id');
            $table->string('type_shop_bottom');
            $table->unsignedBigInteger('bottom_shop_id');
            $table->string('type_top_between_bottom');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('top_shop_id')
                ->references('id')
                ->on('shops')
                ->onDelete('NO ACTION')
                ->onUpdate('restrict');

            $table->foreign('bottom_shop_id')
                ->references('id')
                ->on('shops')
                ->onDelete('NO ACTION')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
