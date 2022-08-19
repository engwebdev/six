<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops_works', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shop_id')->nullable();
            $table->string('shop_name')->nullable();
            $table->unsignedBigInteger('work_id')->nullable();
            $table->string('work_title')->nullable();
            $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->string('subcategory_name')->nullable();
            $table->boolean('shops_works_accept_status')->nullable();
            $table->boolean('shops_works_publish_status')->nullable();
            $table->boolean('shops_works_show_status')->nullable();
            $table->unsignedBigInteger('shops_works_confirm_user_id')->nullable();
            $table->unsignedBigInteger('shops_works_confirm_comment_id')->nullable();
            $table->string('shops_works_confirm_comment_value')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('shop_id')
                ->references('id')
                ->on('shopS')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('work_id')
                ->references('id')
                ->on('work_nature')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('subcategory_id')
                ->references('id')
                ->on('shop_categories')
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
        Schema::dropIfExists('shops_works');
    }
}
