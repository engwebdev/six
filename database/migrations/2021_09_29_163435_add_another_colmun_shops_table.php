<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAnotherColmunShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shops', function (Blueprint $table) {
            $table->string('description')
                ->after('name')
                ->nullable();

            $table->string('shop_photo_url')
                ->after('description')
                ->nullable();

            $table->boolean('type_location')
                ->after('shop_photo_url')
                ->nullable();

            $table->string('lat_location')
                ->after('type_location')
                ->nullable();

            $table->string('long_location')
                ->after('lat_location')
                ->nullable();

            $table->string('shop_country')
                ->after('long_location')
                ->nullable();

            $table->string('shop_province')
                ->after('shop_country')
                ->nullable();

            $table->string('shop_city')
                ->after('shop_province')
                ->nullable();

            $table->string('shop_local')
                ->after('shop_city')
                ->nullable();

            $table->string('shop_Street')
                ->after('shop_local')
                ->nullable();

            $table->string('shop_alley')
                ->after('shop_Street')
                ->nullable();

            $table->string('shop_number')
                ->after('shop_alley')
                ->nullable();

            $table->string('shop_postal_code')
                ->after('shop_number')
                ->nullable();

            $table->string('shop_main_phone_number')
                ->after('shop_postal_code')
                ->nullable();

            $table->boolean( 'shop_accept_status' )
                ->after( 'description' )
                ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shops', function (Blueprint $table) {
            $table->dropColumn('description');
            $table->dropColumn('shop_photo_url');
            $table->dropColumn('type_location');
            $table->dropColumn('lat_location');
            $table->dropColumn('long_location');
            $table->dropColumn('shop_country');
            $table->dropColumn('shop_province');
            $table->dropColumn('shop_city');
            $table->dropColumn('shop_local');
            $table->dropColumn('shop_Street');
            $table->dropColumn('shop_alley');
            $table->dropColumn('shop_number');
            $table->dropColumn('shop_postal_code');
            $table->dropColumn('shop_main_phone_number');
            $table->dropColumn('shop_accept_status');
        });
    }
}
