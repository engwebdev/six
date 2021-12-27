<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductPriceHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_price_history', function (Blueprint $table) {
            $table->bigIncrements();
            $table->unsignedBigInteger('product_price_historiable_id')->nullable()->comment('ای دی محصولی ک قیمت دارد');
            $table->string('product_price_historiable_type')->nullable()->comment('نوع موجودیت محصول');
            $table->unsignedBigInteger('attribute_value_id')->nullable();
            $table->string('attribute_value_name')->nullable();
            $table->float('product_price', 20, 2)->nullable()->comment('قیمت محصول');
            $table->float('product_old_price', 20, 2)->nullable()->comment('قیمت قبلی محصول');
            $table->string('update_price_date')->nullable()->comment('زمان تغییر قیمت');
            $table->boolean('have_discount')->nullable()->comment('استاتوس تخفیف');
            $table->float('discount_percentage_value', 4, 2)->nullable()->comment('درصد تخفیف');
            $table->string('discount_type')->nullable()->comment('نوع تخفیف');

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('attribute_value_id')
                ->references('id')
                ->on('attribute_values')
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
        Schema::dropIfExists('product_price_history');
    }
}
