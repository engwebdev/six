<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEditTables extends Migration
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
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('name');
            $table->timestamps();
        });

        Schema::table( 'shops', function ( Blueprint $table ) {
            $table->softDeletes()
                ->after( 'name' );
        });

        Schema::create( 'roles_shops_users', function ( Blueprint $table ) {
            $table->unsignedBigInteger( 'user_id' )->nullable();
            $table->unsignedBigInteger( 'role_id' )->nullable();
            $table->unsignedBigInteger( 'shop_id' )->nullable();
            $table->softDeletes();
            $table->enum('shop_type', ['parent', 'child'])->nullable();

            $table->foreign( 'user_id' )
                ->references( 'id' )
                ->on( 'users' )
                ->onDelete( 'set null' );
//                ->onDelete( 'cascade' );
//                ->onUpdate( 'cascade' );

            $table->foreign( 'role_id' )
                ->references( 'id' )
                ->on( 'roles' )
                ->onDelete( 'set null' );
//                ->onDelete( 'cascade' );
//                ->onUpdate( 'cascade' );

            $table->foreign( 'shop_id' )
                ->references( 'id' )
                ->on( 'shops' )
                ->onDelete( 'set null' );
//                ->onDelete( 'cascade' );
//                ->onUpdate( 'cascade' );
        });

        Schema::table('shops', function (Blueprint $table) {
            $table->foreign('parent_id')
                ->references('id')
                ->on('shops')
                ->onDelete('set null');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->softDeletes()
                ->after( 'profile_photo_path' );
        });

        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('disable_by')
                ->nullable()
                ->after( 'profile_photo_path' );
            $table->timestamp('disable_at')
                ->nullable()
                ->after( 'disable_by' );

            $table->foreign('disable_by')
                ->references('id')
                ->on('users')
                ->onDelete('set null');
        });

        Schema::table( 'users', function ( Blueprint $table ) {
            // 13 digit +98 and 11 digit 09
            $table->string( 'username')
                ->unique()
                ->after( 'name' )
                ->nullable();
            $table->string( 'mobile', 13 )
                ->unique()
                ->after( 'email_verified_at' )
                ->nullable();
            $table->timestamp( 'mobile_verified_at' )
                ->nullable()
                ->after( 'mobile' );
            $table->unsignedInteger( 'mobile_verified_code' )
                ->nullable()
                ->after( 'mobile_verified_at' );
            $table->timestamp( 'mobile_verified_code_expire_time' )
                ->nullable()
                ->after( 'mobile_verified_code' );
        });

        Schema::table('users', function (Blueprint $table) {
            $table->string('email')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');

        Schema::table( 'shops', function ( Blueprint $table ) {
            $table->dropSoftDeletes();
        });

        Schema::dropIfExists( 'roles_shops_users' );

        Schema::table('shops', function (Blueprint $table) {
            $table->dropForeign(['parent_id']);
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['disable_by']);
            $table->dropColumn(['disable_by', 'disable_at']);
        });

        Schema::table( 'users', function ( Blueprint $table ) {
            $table->dropColumn(['username', 'mobile', 'mobile_verified_at', 'mobile_verified_code', 'mobile_verified_code_expire_time']);
        });

        Schema::table('users', function (Blueprint $table) {
            $table->string('email')->nullable(false)->change();
        });
    }
}
