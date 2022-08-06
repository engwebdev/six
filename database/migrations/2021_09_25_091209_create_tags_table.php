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
            $table->bigIncrements('id');
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

        DB::table('shop_tags')->insert([
            ['id' => 1, 'shop_tag_name' => 'فروشگاه', 'shop_tag_image_url' => null, 'shop_tag_accept_status' => true, 'shop_tag_publish_status' => null, 'shop_tag_additional_user_id' => 1, 'created_at' => '2021-08-07 04:41:40', 'updated_at' => '2021-08-07 04:41:40'],
            ['id' => 2, 'shop_tag_name' => 'تعمییرات', 'shop_tag_image_url' => null, 'shop_tag_accept_status' => true, 'shop_tag_publish_status' => null, 'shop_tag_additional_user_id' => 1, 'created_at' => '2021-08-07 04:41:40', 'updated_at' => '2021-08-07 04:41:40'],
            ['id' => 3, 'shop_tag_name' => 'تجهیزات', 'shop_tag_image_url' => null, 'shop_tag_accept_status' => true, 'shop_tag_publish_status' => null, 'shop_tag_additional_user_id' => 1, 'created_at' => '2021-08-07 04:41:40', 'updated_at' => '2021-08-07 04:41:40'],
            ['id' => 4, 'shop_tag_name' => 'لوازم', 'shop_tag_image_url' => null, 'shop_tag_accept_status' => true, 'shop_tag_publish_status' => null, 'shop_tag_additional_user_id' => 1, 'created_at' => '2021-08-07 04:41:40', 'updated_at' => '2021-08-07 04:41:40'],
            ['id' => 5, 'shop_tag_name' => 'ادوات', 'shop_tag_image_url' => null, 'shop_tag_accept_status' => true, 'shop_tag_publish_status' => null, 'shop_tag_additional_user_id' => 1, 'created_at' => '2021-08-07 04:41:40', 'updated_at' => '2021-08-07 04:41:40'],
            ['id' => 6, 'shop_tag_name' => 'ابزارالات', 'shop_tag_image_url' => null, 'shop_tag_accept_status' => true, 'shop_tag_publish_status' => null, 'shop_tag_additional_user_id' => 1, 'created_at' => '2021-08-07 04:41:40', 'updated_at' => '2021-08-07 04:41:40'],
            ['id' => 7, 'shop_tag_name' => 'فروش تکی', 'shop_tag_image_url' => null, 'shop_tag_accept_status' => true, 'shop_tag_publish_status' => null, 'shop_tag_additional_user_id' => 1, 'created_at' => '2021-08-07 04:41:40', 'updated_at' => '2021-08-07 04:41:40'],
            ['id' => 8, 'shop_tag_name' => 'فروش عمده', 'shop_tag_image_url' => null, 'shop_tag_accept_status' => true, 'shop_tag_publish_status' => null, 'shop_tag_additional_user_id' => 1, 'created_at' => '2021-08-07 04:41:40', 'updated_at' => '2021-08-07 04:41:40'],
        ]);

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
