<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('account_name')->unique()->nullable()->comment('نام اینتیتی');
            $table->unsignedBigInteger('accountable_id')->nullable()->comment('ای دی اینتیتی بیزینس یا شاپ ارتباط با مدل مورف');
            $table->string('accountable_type')->nullable()->comment('مدل اینتیتی بیزینس یا شاپ ارتباط با مدل مورف');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('role_id')->nullable();
            $table->enum('shop_account_size', ['business', 'branch', 'single'])->nullable();
            $table->enum('shop_account_type', ['market', 'visiting'])->nullable();
            $table->enum('account_type', ['parent', 'child', 'owner', 'servants', 'store'])->nullable();
            $table->uuid('account_unique_value')->nullable();
            $table->unsignedBigInteger('account_confirm_user_id')->nullable();
            $table->string('account_status')->nullable();
            $table->string('account_active_at')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('role_id')
                ->references('id')
                ->on('roles')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('account_confirm_user_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('accounts');
    }
}
