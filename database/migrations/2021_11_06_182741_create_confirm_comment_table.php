<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfirmCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confirm_comment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->unsignedBigInteger('system_user_id')->nullable();
            $table->string('system_user_comment')->nullable();
            $table->boolean('confirm_comment_value')->nullable()->comment('مقداری که در جدول محصول برای استاتوس رد و تایید وارد میشود');
            $table->boolean('type_review')->nullable()->comment('مقدار برای انتشار شده / انتتشار نشده');
            $table->unsignedBigInteger('confirm_commentable_id')->nullable()->comment('ای دی محصول مورد تایی');
            $table->string('confirm_commentable_type')->nullable()->comment('نوع موجودیت محصول');
            $table->enum('type_status', ['open', 'close'])->nullable();

            $table->softDeletes();
            $table->timestamps();


            $table->foreign('parent_id')
                ->references('id')
                ->on('confirm_comment')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('system_user_id')
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
        Schema::dropIfExists('confirm_comment');
    }
}
