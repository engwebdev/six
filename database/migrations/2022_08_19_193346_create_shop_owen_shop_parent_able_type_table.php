<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopOwenShopParentAbleTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_owen_shop_parent_able_type', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('shop_id')->nullable();

            $table->unsignedBigInteger('parent_able_id')->nullable();
            $table->string('shop_parent_able_title')->nullable();

            $table->unsignedBigInteger('work_id')->nullable();
            $table->string('work_name')->nullable();

            $table->boolean('shops_owen_parent_able_accept_status')->nullable();
            $table->boolean('shops_owen_parent_able_publish_status')->nullable();
            $table->boolean('shops_owen_parent_able_show_status')->nullable();
            $table->unsignedBigInteger('type_additional_id')->nullable();
            $table->unsignedBigInteger('type_confirm_user_id')->nullable();
            $table->unsignedBigInteger('type_confirm_comment_id')->nullable();
            $table->string('shops_owen_parent_able_confirm_comment_value')->nullable();

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('shop_id')
                ->references('id')
                ->on('shops')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('parent_able_id')
                ->references('id')
                ->on('shop_parent_able_types')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('type_additional_id')
                ->references('id')
                ->on('users')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('type_confirm_user_id')
                ->references('id')
                ->on('users')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('type_confirm_comment_id')
                ->references('id')
                ->on('confirm_comment')
                ->onDelete('no action')
                ->onUpdate('cascade');


        });

        DB::table('shop_owen_shop_parent_able_type')->insert([
            [
                'id' => 1,
                'shop_id' => 1,
                'parent_able_id' => 1,
                'shop_parent_able_title' => 'visit',
                'work_id' => null,
                'work_name' => null,
                'shops_owen_parent_able_accept_status' => true,
                'shops_owen_parent_able_publish_status' => true,
                'shops_owen_parent_able_show_status' => true,
                'type_additional_id' => 1,
                'type_confirm_user_id' => 1,
                'type_confirm_comment_id' => 1,
                'shops_owen_parent_able_confirm_comment_value' => 'تایید شده',
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 2,
                'shop_id' => 1,
                'parent_able_id' => 2,
                'shop_parent_able_title' => 'market',
                'work_id' => null,
                'work_name' => null,
                'shops_owen_parent_able_accept_status' => true,
                'shops_owen_parent_able_publish_status' => true,
                'shops_owen_parent_able_show_status' => true,
                'type_additional_id' => 1,
                'type_confirm_user_id' => 1,
                'type_confirm_comment_id' => 1,
                'shops_owen_parent_able_confirm_comment_value' => 'تایید شده',
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 3,
                'shop_id' => 1,
                'parent_able_id' => 3,
                'shop_parent_able_title' => 'platform',
                'work_id' => null,
                'work_name' => null,
                'shops_owen_parent_able_accept_status' => true,
                'shops_owen_parent_able_publish_status' => true,
                'shops_owen_parent_able_show_status' => true,
                'type_additional_id' => 1,
                'type_confirm_user_id' => 1,
                'type_confirm_comment_id' => 1,
                'shops_owen_parent_able_confirm_comment_value' => 'تایید شده',
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_owen_shop_parent_able_type');
    }
}
