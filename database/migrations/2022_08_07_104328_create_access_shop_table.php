<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccessShopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('access_shop', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('access_id')->nullable();
            $table->string('access_title')->nullable();
            $table->unsignedBigInteger('shop_id')->nullable();
            $table->string('shop_name')->nullable();
            $table->string('start_access_time')->nullable();
            $table->string('end_access_time')->nullable();
            $table->string('length_access_time')->nullable();
            $table->bigInteger('history_of_activated_number')->nullable()->default(0);
            $table->boolean('access_shop_option_status')->nullable();
            $table->boolean('access_shop_accept_status')->nullable();
            $table->boolean('access_shop_publish_status')->nullable();
            $table->boolean('access_shop_show_status')->nullable();
            $table->unsignedBigInteger('access_shop_confirm_user_id')->nullable();
            $table->unsignedBigInteger('access_shop_confirm_comment_id')->nullable();
            $table->string('access_shop_confirm_comment_value')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('access_id')
                ->references('id')
                ->on('accesses')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('shop_id')
                ->references('id')
                ->on('shops')
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
        Schema::dropIfExists('access_shop');
    }
}
