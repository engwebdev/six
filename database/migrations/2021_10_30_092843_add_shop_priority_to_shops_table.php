<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddShopPriorityToShopsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table( 'shops', function (Blueprint $table) {
            $table->integer( 'shop_Priority' )
                ->after( 'shop_accept_status' )
                ->nullable()
                ->default(12);
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table( 'shops', function (Blueprint $table) {
            $table->dropColumn( 'shop_Priority' );
        } );
    }
}
