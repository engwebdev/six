<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccessWorkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('access_work', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('work_id')->nullable();
            $table->string('work_name')->nullable();
            $table->unsignedBigInteger('access_id')->nullable();
            $table->string('access_title')->nullable();
            $table->boolean('access_work_accept_status')->nullable();
            $table->boolean('access_work_publish_status')->nullable();
            $table->boolean('access_work_show_status')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('work_id')
                ->references('id')
                ->on('work_nature')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('access_id')
                ->references('id')
                ->on('accesses')
                ->onDelete('no action')
                ->onUpdate('cascade');
        });

        DB::table('access_work')->insert([
            [
                'id' => 1,
                'work_id' => 13,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 2,
                'work_id' => 14,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 3,
                'work_id' => 15,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 4,
                'work_id' => 16,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 5,
                'work_id' => 17,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 6,
                'work_id' => 18,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 7,
                'work_id' => 19,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 8,
                'work_id' => 20,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 9,
                'work_id' => 21,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 10,
                'work_id' => 22,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 11,
                'work_id' => 23,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 12,
                'work_id' => 23,
                'work_name' => '',
                'access_id' => 2,
                'access_title' => 'محصولات تولیدی قابل سفارش',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 13,
                'work_id' => 23,
                'work_name' => '',
                'access_id' => 3,
                'access_title' => 'محصولات سفارشی قابل نصب',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 14,
                'work_id' => 24,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 15,
                'work_id' => 24,
                'work_name' => '',
                'access_id' => 3,
                'access_title' => 'محصولات سفارشی قابل نصب',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 16,
                'work_id' => 25,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 17,
                'work_id' => 25,
                'work_name' => '',
                'access_id' => 3,
                'access_title' => 'محصولات سفارشی قابل نصب',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 18,
                'work_id' => 26,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 19,
                'work_id' => 26,
                'work_name' => '',
                'access_id' => 3,
                'access_title' => 'محصولات سفارشی قابل نصب',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 20,
                'work_id' => 27,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 21,
                'work_id' => 27,
                'work_name' => '',
                'access_id' => 3,
                'access_title' => 'محصولات سفارشی قابل نصب',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 22,
                'work_id' => 28,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 23,
                'work_id' => 28,
                'work_name' => '',
                'access_id' => 3,
                'access_title' => 'محصولات سفارشی قابل نصب',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 24,
                'work_id' => 29,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 25,
                'work_id' => 29,
                'work_name' => '',
                'access_id' => 2,
                'access_title' => 'محصولات تولیدی قابل سفارش',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 26,
                'work_id' => 29,
                'work_name' => '',
                'access_id' => 3,
                'access_title' => 'محصولات سفارشی قابل نصب',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 27,
                'work_id' => 30,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 28,
                'work_id' => 30,
                'work_name' => '',
                'access_id' => 3,
                'access_title' => 'محصولات سفارشی قابل نصب',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 29,
                'work_id' => 31,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 30,
                'work_id' => 31,
                'work_name' => '',
                'access_id' => 2,
                'access_title' => 'محصولات تولیدی قابل سفارش',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 31,
                'work_id' => 31,
                'work_name' => '',
                'access_id' => 3,
                'access_title' => 'محصولات سفارشی قابل نصب',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 32,
                'work_id' => 32,
                'work_name' => 'استادکار و بنا',
                'access_id' => 6,
                'access_title' => 'قرارداد',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 33,
                'work_id' => 33,
                'work_name' => 'تعمیر لوازم صنعتی کسب و کار',
                'access_id' => 5,
                'access_title' => 'محصولات تعمیرپذیر',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 34,
                'work_id' => 34,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 35,
                'work_id' => 35,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 36,
                'work_id' => 36,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 37,
                'work_id' => 37,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 38,
                'work_id' => 38,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 39,
                'work_id' => 39,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 40,
                'work_id' => 39,
                'work_name' => '',
                'access_id' => 2,
                'access_title' => 'محصولات تولیدی قابل سفارش',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 41,
                'work_id' => 39,
                'work_name' => '',
                'access_id' => 5,
                'access_title' => 'محصولات تعمیرپذیر',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 42,
                'work_id' => 40,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 43,
                'work_id' => 40,
                'work_name' => '',
                'access_id' => 2,
                'access_title' => 'محصولات تولیدی قابل سفارش',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 44,
                'work_id' => 40,
                'work_name' => '',
                'access_id' => 5,
                'access_title' => 'محصولات تعمیرپذیر',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 45,
                'work_id' => 41,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 46,
                'work_id' => 42,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 47,
                'work_id' => 43,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 48,
                'work_id' => 44,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 49,
                'work_id' => 44,
                'work_name' => '',
                'access_id' => 2,
                'access_title' => 'محصولات تولیدی قابل سفارش',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 50,
                'work_id' => 45,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 51,
                'work_id' => 46,
                'work_name' => '',
                'access_id' => 5,
                'access_title' => 'محصولات تعمیرپذیر',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 52,
                'work_id' => 47,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 53,
                'work_id' => 47,
                'work_name' => '',
                'access_id' => 2,
                'access_title' => 'محصولات تولیدی قابل سفارش',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 54,
                'work_id' => 48,
                'work_name' => '',
                'access_id' => 5,
                'access_title' => 'محصولات تعمیرپذیر',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 55,
                'work_id' => 49,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 56,
                'work_id' => 50,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 57,
                'work_id' => 50,
                'work_name' => '',
                'access_id' => 2,
                'access_title' => 'محصولات تولیدی قابل سفارش',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 58,
                'work_id' => 50,
                'work_name' => '',
                'access_id' => 3,
                'access_title' => 'محصولات سفارشی قابل نصب',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 59,
                'work_id' => 51,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 60,
                'work_id' => 52,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 61,
                'work_id' => 53,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 62,
                'work_id' => 53,
                'work_name' => '',
                'access_id' => 3,
                'access_title' => 'محصولات سفارشی قابل نصب',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 63,
                'work_id' => 54,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 64,
                'work_id' => 55,
                'work_name' => '',
                'access_id' => 5,
                'access_title' => 'محصولات تعمیرپذیر',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 65,
                'work_id' => 56,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 66,
                'work_id' => 57,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 67,
                'work_id' => 58,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 68,
                'work_id' => 59,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 69,
                'work_id' => 60,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 70,
                'work_id' => 61,
                'work_name' => '',
                'access_id' => 5,
                'access_title' => 'محصولات تعمیرپذیر',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 71,
                'work_id' => 62,
                'work_name' => '',
                'access_id' => 5,
                'access_title' => 'محصولات تعمیرپذیر',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 72,
                'work_id' => 63,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 73,
                'work_id' => 64,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 74,
                'work_id' => 65,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 75,
                'work_id' => 66,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 76,
                'work_id' => 67,
                'work_name' => '',
                'access_id' => 4,
                'access_title' => 'محصولات فروش نوبت',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 77,
                'work_id' => 68,
                'work_name' => '',
                'access_id' => 4,
                'access_title' => 'محصولات فروش نوبت',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 78,
                'work_id' => 69,
                'work_name' => '',
                'access_id' => 4,
                'access_title' => 'محصولات فروش نوبت',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 79,
                'work_id' => 70,
                'work_name' => '',
                'access_id' => 4,
                'access_title' => 'محصولات فروش نوبت',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 80,
                'work_id' => 71,
                'work_name' => '',
                'access_id' => 4,
                'access_title' => 'محصولات فروش نوبت',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 81,
                'work_id' => 72,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 82,
                'work_id' => 73,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 83,
                'work_id' => 74,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 84,
                'work_id' => 75,
                'work_name' => '',
                'access_id' => 4,
                'access_title' => 'محصولات فروش نوبت',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 85,
                'work_id' => 76,
                'work_name' => '',
                'access_id' => 4,
                'access_title' => 'محصولات فروش نوبت',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 86,
                'work_id' => 77,
                'work_name' => '',
                'access_id' => 4,
                'access_title' => 'محصولات فروش نوبت',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 87,
                'work_id' => 78,
                'work_name' => '',
                'access_id' => 4,
                'access_title' => 'محصولات فروش نوبت',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 88,
                'work_id' => 79,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 89,
                'work_id' => 80,
                'work_name' => '',
                'access_id' => 1,
                'access_title' => 'محصولات عادی',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 90,
                'work_id' => 81,
                'work_name' => '',
                'access_id' => 4,
                'access_title' => 'محصولات فروش نوبت',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 91,
                'work_id' => 82,
                'work_name' => '',
                'access_id' => 4,
                'access_title' => 'محصولات فروش نوبت',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 92,
                'work_id' => 83,
                'work_name' => '',
                'access_id' => 4,
                'access_title' => 'محصولات فروش نوبت',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
                'created_at' => '2021-08-07 04:41:40',
                'updated_at' => '2021-08-07 04:41:40'
            ],
            [
                'id' => 93,
                'work_id' => 84,
                'work_name' => '',
                'access_id' => 4,
                'access_title' => 'محصولات فروش نوبت',
                'access_work_accept_status' => true,
                'access_work_publish_status' => true,
                'access_work_show_status' => 1,
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
        Schema::dropIfExists('access_work');
    }
}
