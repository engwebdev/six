<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTagsPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shop_id')->nullable();
            $table->unsignedBigInteger('tag_id')->nullable();
            $table->boolean('tag_accept_status')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign( 'shop_id' )
                ->references( 'id' )
                ->on( 'shops' )
                ->onDelete('set null');

            $table->foreign( 'tag_id' )
                ->references( 'id' )
                ->on( 'tags' )
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops_tags');
    }
}
