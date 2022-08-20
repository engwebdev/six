<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopParentAbleTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_parent_able_types', function (Blueprint $table) {
            $table->id();
            $table->string('shop_parent_able_title')->nullable();

            $table->string('shop_parent_able_fa_name')->nullable();
            $table->string('shop_parent_able_en_name')->nullable();

            $table->boolean('shops_parent_able_accept_status')->nullable();
            $table->boolean('shops_parent_able_publish_status')->nullable();
            $table->boolean('shops_parent_able_show_status')->nullable();
            $table->unsignedBigInteger('parent_able_additional_user_id')->nullable();
            $table->unsignedBigInteger('parent_able_additional_comment_id')->nullable();
            $table->string('shops_parent_able_additional_comment_value')->nullable();

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('parent_able_additional_user_id')
                ->references('id')
                ->on('users')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('parent_able_additional_comment_id')
                ->references('id')
                ->on('confirm_comment')
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
        Schema::dropIfExists('shop_parent_able_type');
    }
}
