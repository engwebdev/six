<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCustomerCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_customer_comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_customer_comment')->nullable();
            $table->tinyInteger ('product_customer_rate')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->enum('product_customer_rate_weight_type', ['user', 'customer'])->nullable();
            $table->tinyInteger ('product_customer_rate_weight')->nullable()->comment('مققداری که در امتیاز ضرب میشود و تعداد به همان مقدار به تعداد نظرات افزوده میشود');
            $table->unsignedBigInteger('product_customer_last_sum_rate')->nullable();
            $table->unsignedBigInteger('product_customer_last_average_rate')->nullable();

            $table->unsignedBigInteger('product_commentable_id')->nullable()->comment('ای دی محصول مورد تایی');
            $table->string('product_commentable_type')->nullable()->comment('نوع موجودیت محصول');

            $table->boolean('product_customer_comment_access_status')->nullable();
            $table->boolean('product_customer_comment_status')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_customer_comments');
    }
}
