<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_tags', function (Blueprint $table) {
            $table->bigIncrements();
            $table->string('shop_tag_name')->nullable();
            $table->string('shop_tag_image_url')->nullable();
            $table->boolean('shop_tag_accept_status')->nullable();
            $table->boolean('shop_tag_publish_status')->nullable();
            $table->unsignedBigInteger('shop_tag_additional_user_id')->nullable();
            $table->softDeletes();
            $table->timestamps();


            $table->foreign('shop_tag_additional_user_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('shop_tags');
    }
}
