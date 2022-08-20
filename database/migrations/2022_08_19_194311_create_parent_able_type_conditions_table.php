<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentAbleTypeConditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent_able_type_conditions', function (Blueprint $table) {
            $table->id();
            $table->string('parent_able_type_condition_title')->nullable();
            $table->string('parent_able_type_condition_name')->nullable();
            $table->string('parent_able_type_condition_value')->nullable();

            $table->unsignedBigInteger('parent_able_id')->nullable();
            $table->string('shop_parent_able_name')->nullable();

            $table->boolean('parent_able_type_condition_accept_status')->nullable();
            $table->boolean('parent_able_type_condition_publish_status')->nullable();
            $table->boolean('parent_able_type_condition_show_status')->nullable();
            $table->unsignedBigInteger('condition_additional_user_id')->nullable();
            $table->unsignedBigInteger('condition_confirm_user_id')->nullable();
            $table->unsignedBigInteger('condition_confirm_comment_id')->nullable();
            $table->string('parent_able_type_condition_additional_comment_value')->nullable();

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('parent_able_id')
                ->references('id')
                ->on('shop_parent_able_types')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('condition_additional_user_id')
                ->references('id')
                ->on('users')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('condition_confirm_user_id')
                ->references('id')
                ->on('users')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('condition_confirm_comment_id')
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
        Schema::dropIfExists('parent_able_type_conditions');
    }
}
