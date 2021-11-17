<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditTagsTableAddColumn extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table( 'tags', function (Blueprint $table) {
            $table->string( 'tag_image_url' )
                ->after( 'tag_name' )
                ->nullable();

            $table->boolean( 'tag_publish_status' )
                ->after( 'tag_image_url' )
                ->nullable();

            $table->string( 'tag_additional_type' )
                ->after( 'tag_accept_status' )
                ->nullable();

            $table->unsignedBigInteger( 'tag_additional_user_id' )
                ->after( 'tag_additional_type' )
                ->nullable();

            $table->foreign('tag_additional_user_id')
                ->references('id')
                ->on('users')
                ->onDelete('set null');
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table( 'tags', function (Blueprint $table) {
            //
        } );
    }
}
