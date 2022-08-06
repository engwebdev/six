<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class CreateMerchantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchant', function (Blueprint $table) {
            $table->id();
            $table->uuid('merchant_id')->nullable();
            $table->string('merchant_title')->nullable();
            $table->string('merchant_name')->nullable();
            $table->string('merchant_type')->nullable();
            $table->boolean('merchant_status')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        DB::table('merchant')->insert([
                [
                    'id' => 1,
//                    'merchant_id' => Str::uuid()->toString(),
                    'merchant_id' => '97541b55-f466-4fc1-bad7-489e2246a9ad',
                    'merchant_title' => 'shopkeeper',
                    'merchant_name' => 'shop',
                    'merchant_type' => 'shop',
                    'merchant_status' => true,
                ]
            ]
        );
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('merchant');
    }
}
