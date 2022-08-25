<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->bigIncrements('id');
//            $table->unsignedBigInteger('parent_id')->nullable();
//            $table->string('parent_type')->nullable();
//            $table->unsignedBigInteger('shop_category_id')->nullable();
//            $table->string('shop_category_name')->nullable();
//            $table->enum('shop_category_type', ['shopping', 'freelancer', 'repair', 'presentation'])->nullable();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('shop_accept_status')->nullable();

            $table->integer('shop_priority')->nullable()->default(12);
            $table->string('shop_photo_url')->nullable();

            $table->boolean('type_location')->nullable();
            $table->string('lat_location')->nullable();
            $table->string('long_location')->nullable();
            $table->string('shop_country')->nullable();
            $table->string('shop_province')->nullable();
            $table->string('shop_city')->nullable();
            $table->string('shop_local')->nullable();
            $table->string('shop_street')->nullable();
            $table->string('shop_alley')->nullable();
            $table->string('shop_number')->nullable();
            $table->string('shop_postal_code')->nullable();
            $table->string('shop_main_phone_number')->nullable();

            $table->boolean('shop_parent_able_status')->nullable();
            $table->boolean('shop_parent_able_request')->nullable();

            // need add new table comments or points // todo mehdi 22/01/01
            $table->integer('shop_number_points')->nullable()->comment('تعداد نظرات یا امتیازها رلیشن با جدول نظرات');
            $table->float('shop_total_points', 16, 5)->nullable()->comment('مجموع امتیازها');
            $table->float('shop_average_points', 7, 5)->nullable()->comment('متوسط امتیازها');
            $table->float('shop_last_point', 6, 5)->nullable()->comment('اخرین امتیاز');
            $table->unsignedBigInteger('additional_user_id')->nullable();

            // need add new table likes // todo mehdi 22/01/01
            $table->integer('shop_number_likes')->nullable()->comment('تعداد لایک ها ارتباط با جدول کسانی ک لایک کردن');
            $table->integer('normal_product_number_likes')->nullable()->comment('تعداد لایک ها ارتباط با جدول کسانی ک لایک کردن');

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('additional_user_id')
                ->references('id')
                ->on('users')
                ->onDelete('no action')
                ->onUpdate('cascade');

//            when created shop_categories table -> this comment write in shop_categories migrate file
//            $table->foreign('shop_category_id')
//                ->references('id')
//                ->on('shop_categories')
//                ->onDelete('no action')
//                ->onUpdate('cascade');
        });

        DB::table('shops')->insert(
            array(
                [
//                    'parent_type' => null,
                    'name' => 'test',
                    'description' => 'test',
                    'shop_accept_status' => true,
                    'shop_priority' => 12,
                    'shop_photo_url' => null,
                    'type_location' => true,
                    'lat_location' => null,
                    'long_location' => null,
                    'shop_country' => 'iran',
                    'shop_province' => 'tehran',
                    'shop_city' => 'tehran',
                    'shop_local' => 'tehran',
                    'shop_street' => 'tehran',
                    'shop_alley' => 'tehran',
                    'shop_number' => '25',
                    'shop_postal_code' => '1234567899',
                    'shop_main_phone_number' => '02120002000',

                    'shop_parent_able_status' => true,
                    'shop_parent_able_request' => true,

                    'shop_number_points' => 0,
                    'shop_total_points' => 0,
                    'shop_average_points' => 0,
                    'shop_last_point' => 0,
                    'additional_user_id' => 1,
                    'shop_number_likes' => 0,
                    'normal_product_number_likes' => 0,
                ]
            )
        );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
