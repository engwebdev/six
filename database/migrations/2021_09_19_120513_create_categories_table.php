<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateCategoriesTable
 */
class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('shop_category_name')->nullable();
            $table->string('shop_category_image_url')->nullable();
            $table->boolean('shop_category_accept_status')->nullable();
            $table->boolean('shop_category_publish_status')->nullable();
            $table->enum( 'shop_category_show_status', ['private', 'public'])->nullable();
            $table->unsignedBigInteger('shop_category_additional_user_id')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('parent_id')
                ->references('id')
                ->on('shop_categories')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('shop_category_additional_user_id')
                ->references('id')
                ->on('users')
                ->onDelete('no action')
                ->onUpdate('cascade');
        });

//      this relation moving form migrate shop in file shop_categories
        Schema::table('shops', function (Blueprint $table) {
            $table->foreign('shop_category_id')
                ->references('id')
                ->on('shop_categories')
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
        Schema::dropIfExists('categories');
    }
}
