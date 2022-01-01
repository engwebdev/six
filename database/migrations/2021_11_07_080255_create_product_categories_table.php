<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('product_category_name')->nullable();
            $table->string('product_category_image_url')->nullable();

            $table->unsignedBigInteger('product_categoryable_id')->nullable()->comment('ای دی محصول مورد تایی');
            $table->string('product_categoryable_type')->nullable()->comment('نوع موجودیت محصول');

            $table->unsignedBigInteger('product_category_additional_user_id')->nullable();
            $table->string('product_category_additional_user_type')->nullable();
            $table->boolean('product_category_accept_status')->nullable();
            $table->boolean('product_category_publish_status');
            $table->enum('product_category_show_status', ['private', 'public'])->nullable();

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('parent_id')
                ->references('id')
                ->on('product_categories')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('product_category_additional_user_id')
                ->references('id')
                ->on('users')
                ->onDelete('no action')
                ->onUpdate('cascade');
        });

        Schema::table('normal_products', function (Blueprint $table) {
            $table->foreign('normal_product_category_id')
                ->references('id')
                ->on('product_categories')
                ->onDelete('no action')
                ->onUpdate('cascade');
        });

        Schema::table('custom_products', function (Blueprint $table) {
            $table->foreign('custom_product_category_id')
                ->references('id')
                ->on('product_categories')
                ->onDelete('no action')
                ->onUpdate('cascade');
        });

        Schema::table('normal_services', function (Blueprint $table) {
            $table->foreign('normal_service_category_id')
                ->references('id')
                ->on('product_categories')
                ->onDelete('no action')
                ->onUpdate('cascade');
        });

        Schema::table('custom_services', function (Blueprint $table) {
            $table->foreign('custom_service_category_id')
                ->references('id')
                ->on('product_categories')
                ->onDelete('no action')
                ->onUpdate('cascade');
        });

        Schema::table('freelancers', function (Blueprint $table) {
            $table->foreign('freelancer_category_id')
                ->references('id')
                ->on('product_categories')
                ->onDelete('no action')
                ->onUpdate('cascade');
        });

        Schema::table('events', function (Blueprint $table) {
            $table->foreign('event_category_id')
                ->references('id')
                ->on('product_categories')
                ->onDelete('no action')
                ->onUpdate('cascade');
        });

        /*
        //Schema::table('details', function (Blueprint $table) {
        //    $table->foreign('detail_category_id')
        //        ->references('id')
        //        ->on('product_categories')
        //        ->onDelete('no action')
        //        ->onUpdate('cascade');
        //});
        */

        Schema::table('tasks', function (Blueprint $table) {
            $table->foreign('task_category_id')
                ->references('id')
                ->on('product_categories')
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
        Schema::dropIfExists('product_categories');
    }
}
