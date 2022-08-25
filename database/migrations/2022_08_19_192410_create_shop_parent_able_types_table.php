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

        DB::table('shop_parent_able_types')->insert([
            [
                'id' => 1,
                'shop_parent_able_title' => 'visit',
                'shop_parent_able_fa_name' => 'نوبت دادن',
                'shop_parent_able_en_name' => 'visit sell',
                'shops_parent_able_accept_status' => true,
                'shops_parent_able_publish_status' => true,
                'shops_parent_able_show_status' => true,
                'parent_able_additional_user_id' => 1,
                'parent_able_additional_comment_id' => 1,
                'shops_parent_able_additional_comment_value' => 'تایید شده',
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 2,
                'shop_parent_able_title' => 'market',
                'shop_parent_able_fa_name' => 'فروشگاه مرکزی',
                'shop_parent_able_en_name' => 'central market',
                'shops_parent_able_accept_status' => true,
                'shops_parent_able_publish_status' => true,
                'shops_parent_able_show_status' => true,
                'parent_able_additional_user_id' => 1,
                'parent_able_additional_comment_id' => 1,
                'shops_parent_able_additional_comment_value' => 'تایید شده',
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 3,
                'shop_parent_able_title' => 'platform',
                'shop_parent_able_fa_name' => 'پلتفرم چند وجهی',
                'shop_parent_able_en_name' => 'platform',
                'shops_parent_able_accept_status' => true,
                'shops_parent_able_publish_status' => true,
                'shops_parent_able_show_status' => true,
                'parent_able_additional_user_id' => 1,
                'parent_able_additional_comment_id' => 1,
                'shops_parent_able_additional_comment_value' => 'تایید شده',
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
        Schema::dropIfExists('shop_parent_able_type');
    }
}
