<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryNameFiledToNormalProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('normal_products', function (Blueprint $table) {
            $table->string( 'product_category_name' )
                ->after( 'product_category_id' )
                ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('normal_products', function (Blueprint $table) {
            $table->dropColumn( 'product_category_name' );
        });
    }
}
