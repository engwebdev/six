<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accesses', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('farsi_name')->nullable();
            $table->string('english_name')->nullable();
            $table->string('access_type')->nullable();
            $table->boolean('access_accept_status')->nullable();
            $table->boolean('access_activation_status')->nullable();
            $table->unsignedBigInteger('access_activator_admin_id')->nullable();
            $table->unsignedBigInteger('access_activator_comment_id')->nullable();
            $table->string('access_activator_comment_value')->nullable();
            $table->boolean('access_option_status')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('access_activator_admin_id')
                ->references('id')
                ->on('users')
                ->onDelete('no action')
                ->onUpdate('cascade');
        });


        DB::table('accesses')->insert([
            [
                'id' => 1,
                'title' => 'محصولات عادی',
                'farsi_name' => 'محصولات عادی',
                'english_name' => 'normal product',
                'access_type' => null,
                'access_accept_status' => true,
                'access_activation_status' => true,
                'access_activator_admin_id' => 1,
                'access_activator_comment_id' => 1,
                'access_activator_comment_value' => 'تایید شد',
                'access_option_status' => null,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 2,
                'title' => 'محصولات تولیدی قابل سفارش',
                'farsi_name' => 'محصولات سفارشی',
                'english_name' => 'optional product',
                'access_type' => null,
                'access_accept_status' => true,
                'access_activation_status' => true,
                'access_activator_admin_id' => 1,
                'access_activator_comment_id' => 1,
                'access_activator_comment_value' => 'تایید شد',
                'access_option_status' => null,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 3,
                'title' => 'محصولات سفارشی قابل نصب',
                'farsi_name' => 'سرویس سفارشی',
                'english_name' => 'optional service',
                'access_type' => null,
                'access_accept_status' => true,
                'access_activation_status' => true,
                'access_activator_admin_id' => 1,
                'access_activator_comment_id' => 1,
                'access_activator_comment_value' => 'تایید شد',
                'access_option_status' => null,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 4,
                'title' => 'محصولات فروش نوبت',
                'farsi_name' => 'محصولات فروش نوبت',
                'english_name' => 'visiting service',
                'access_type' => null,
                'access_accept_status' => true,
                'access_activation_status' => true,
                'access_activator_admin_id' => 1,
                'access_activator_comment_id' => 1,
                'access_activator_comment_value' => 'تایید شد',
                'access_option_status' => null,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 5,
                'title' => 'محصولات تعمیرپذیر',
                'farsi_name' => 'محصولات تعمیرپذیر',
                'english_name' => 'repairable product',
                'access_type' => null,
                'access_accept_status' => true,
                'access_activation_status' => true,
                'access_activator_admin_id' => 1,
                'access_activator_comment_id' => 1,
                'access_activator_comment_value' => 'تایید شد',
                'access_option_status' => null,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 6,
                'title' => 'قرارداد',
                'farsi_name' => 'پیمان نامه',
                'english_name' => 'contract',
                'access_type' => null,
                'access_accept_status' => true,
                'access_activation_status' => true,
                'access_activator_admin_id' => 1,
                'access_activator_comment_id' => 1,
                'access_activator_comment_value' => 'تایید شد',
                'access_option_status' => null,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 7,
                'title' => 'معرفی نامه',
                'farsi_name' => 'معرفی نامه',
                'english_name' => 'introduction',
                'access_type' => null,
                'access_accept_status' => true,
                'access_activation_status' => true,
                'access_activator_admin_id' => 1,
                'access_activator_comment_id' => 1,
                'access_activator_comment_value' => 'تایید شد',
                'access_option_status' => null,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 8,
                'title' => 'رویداد',
                'farsi_name' => 'رویداد',
                'english_name' => 'event',
                'access_type' => null,
                'access_accept_status' => true,
                'access_activation_status' => true,
                'access_activator_admin_id' => 1,
                'access_activator_comment_id' => 1,
                'access_activator_comment_value' => 'تایید شد',
                'access_option_status' => null,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 9,
                'title' => 'محصولات مجازی',
                'farsi_name' => 'محصولات مجازی',
                'english_name' => 'virtual product',
                'access_type' => null,
                'access_accept_status' => true,
                'access_activation_status' => true,
                'access_activator_admin_id' => 1,
                'access_activator_comment_id' => 1,
                'access_activator_comment_value' => 'تایید شد',
                'access_option_status' => null,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 10,
                'title' => 'فروش اکانت',
                'farsi_name' => 'محصولات اکانتی',
                'english_name' => 'accounting product',
                'access_type' => null,
                'access_accept_status' => true,
                'access_activation_status' => true,
                'access_activator_admin_id' => 1,
                'access_activator_comment_id' => 1,
                'access_activator_comment_value' => 'تایید شد',
                'access_option_status' => null,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 11,
                'title' => 'طرح ها',
                'farsi_name' => 'طرح',
                'english_name' => 'planning product',
                'access_type' => null,
                'access_accept_status' => true,
                'access_activation_status' => true,
                'access_activator_admin_id' => 1,
                'access_activator_comment_id' => 1,
                'access_activator_comment_value' => 'تایید شد',
                'access_option_status' => null,
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
        Schema::dropIfExists('accesses');
    }
}
