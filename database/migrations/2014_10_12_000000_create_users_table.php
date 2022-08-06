<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();

            $table->string('username')->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            // 13 digit +98 and 11 digit 09
            $table->string('mobile', 13)->unique()->nullable();
            $table->timestamp('mobile_verified_at')->nullable();
            $table->string('mobile_verified_code')->nullable();
            $table->timestamp('mobile_verified_code_expire_time')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->unsignedBigInteger('disable_by')->nullable();
            $table->timestamp('disable_at')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('disable_by')
                ->references('id')
                ->on('users')
                ->onDelete('no action')
                ->onUpdate('cascade');
        });

        DB::table('users')->insert(
            array(
                [
                    'name' => null,
                    'first_name' => 'admin',
                    'last_name' => 'system',
                    'username' => null,
                    'email' => 'admin@admin.com',
                    'mobile' => '+989390001000',
                    'mobile_verified_at' => '2021-08-04 11:49:35',
                    'mobile_verified_code' => null,
                    'mobile_verified_code_expire_time' => null,
                    'password' => '$2y$10$8R8YMQpBOAnsjZmxq7uwb.hGFCWH0UXH17uUvQHyBb2JCSIvJhDHq',
                    'disable_by' => 1,
                    'disable_at' => '2021-08-04 11:49:35',
                    'created_at' => '2021-08-04 11:49:35',
                    'updated_at' => '2021-11-22 12:55:42'
                ],
                [
                    'name' => null,
                    'first_name' => 'test',
                    'last_name' => 'test',
                    'username' => null,
                    'email' => 'test@test.com',
                    'mobile' => '+989390002000',
                    'mobile_verified_at' => '2021-08-04 11:49:35',
                    'mobile_verified_code' => null,
                    'mobile_verified_code_expire_time' => null,
                    'password' => '$2y$10$8R8YMQpBOAnsjZmxq7uwb.hGFCWH0UXH17uUvQHyBb2JCSIvJhDHq',
                    'disable_by' => 1,
                    'disable_at' => '2021-08-04 11:49:35',
                    'created_at' => '2021-08-04 11:49:35',
                    'updated_at' => '2021-11-22 12:55:42'
                ],
                [
                    'name' => null,
                    'first_name' => 'shopkeeper',
                    'last_name' => 'shopkeeper',
                    'username' => null,
                    'email' => 'shopkeeper@shopkeeper.com',
                    'mobile' => '+989390003000',
                    'mobile_verified_at' => '2021-08-04 11:49:35',
                    'mobile_verified_code' => null,
                    'mobile_verified_code_expire_time' => null,
                    'password' => '$2y$10$8R8YMQpBOAnsjZmxq7uwb.hGFCWH0UXH17uUvQHyBb2JCSIvJhDHq',
                    'disable_by' => 1,
                    'disable_at' => '2021-08-04 11:49:35',
                    'created_at' => '2021-08-04 11:49:35',
                    'updated_at' => '2021-11-22 12:55:42'
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
        Schema::dropIfExists('users');
    }
}
