<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditCategoriesTableAddColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->string( 'category_image_url' )
                ->after( 'category_name' )
                ->nullable();
            $table->unsignedBigInteger( 'categoryable_id' )
                ->after( 'category_image_url' )
                ->nullable();
            $table->string( 'categoryable_type' )
                ->after( 'categoryable_id' )
                ->nullable();
            $table->unsignedBigInteger( 'category_additional_user_id' )
                ->after( 'categoryable_type' )
                ->nullable();
            $table->string( 'category_additional_user_type' )
                ->after( 'category_additional_user_id' )
                ->nullable();
            $table->boolean( 'category_accept_status' )
                ->after( 'category_additional_user_type' )
                ->nullable();
            $table->boolean( 'category_publish_status' )
                ->after( 'category_accept_status' )
                ->nullable();
            $table->enum( 'category_show_status', ['private', 'public'])
                ->after( 'category_publish_status' )
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
        Schema::table('categories', function (Blueprint $table) {
            //
        });
    }
}
