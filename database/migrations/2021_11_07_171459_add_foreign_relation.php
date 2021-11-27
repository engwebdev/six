<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignRelation extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table( 'details', function (Blueprint $table) {
            $table->unsignedBigInteger( 'price_id' )->change();
            $table->foreign( 'normal_product_attribute_name_id' )
                ->references( 'id' )
                ->on( 'attributes' )
                ->onDelete( 'set null' )
                ->onUpdate( 'restrict' );

            $table->foreign( 'normal_product_attribute_value_id' )
                ->references( 'id' )
                ->on( 'attribute_values' )
                ->onDelete( 'set null' )
                ->onUpdate( 'restrict' );

            $table->foreign( 'price_id' )
                ->references( 'id' )
                ->on( 'product_price_history' )
                ->onDelete( 'set null' )
                ->onUpdate( 'restrict' );
        } );

        Schema::table( 'normal_services', function (Blueprint $table) {
//            $table->foreign( 'normal_service_category_id' )
//                ->references( 'id' )
//                ->on( 'product_categories' )
//                ->onDelete( 'set null' )
//                ->onUpdate( 'restrict' );

            $table->foreign( 'normal_service_shop_id' )
                ->references( 'id' )
                ->on( 'shops' )
                ->onDelete( 'set null' )
                ->onUpdate( 'restrict' );

            $table->foreign( 'normal_service_registry_shopkeeper_id' )
                ->references( 'id' )
                ->on( 'users' )
                ->onDelete( 'set null' )
                ->onUpdate( 'restrict' );

            $table->foreign( 'normal_service_status_confirm_user_id' )
                ->references( 'id' )
                ->on( 'users' )
                ->onDelete( 'set null' )
                ->onUpdate( 'restrict' );

            $table->foreign( 'normal_service_category_id' )
                ->references( 'id' )
                ->on( 'product_categories' )
                ->onDelete( 'set null' )
                ->onUpdate( 'restrict' );

        } );
/*****************/


        Schema::table( 'confirm_comment', function (Blueprint $table) {
            $table->foreign( 'system_user_id' )
                ->references( 'id' )
                ->on( 'users' )
                ->onDelete( 'set null' )
                ->onUpdate( 'restrict' );

            $table->foreign( 'child_id' )
                ->references( 'id' )
                ->on( 'confirm_comment' )
                ->onDelete( 'set null' )
                ->onUpdate( 'restrict' );
        } );

        Schema::table( 'attribute_values', function (Blueprint $table) {
            $table->unsignedBigInteger( 'attribute_id' )
                ->after( 'attribute_value_name' )
                ->nullable();
            $table->string( 'attribute_name' )
                ->after( 'attribute_id' )
                ->nullable();

            $table->foreign( 'attribute_id' )
                ->references( 'id' )
                ->on( 'attributes' )
                ->onDelete( 'set null' )
                ->onUpdate( 'restrict' );
        } );

        Schema::table( 'product_price_history', function (Blueprint $table) {
            $table->unsignedBigInteger( 'attribute_value_id' )
                ->after( 'product_price_historiable_type' )
                ->nullable();
            $table->string( 'attribute_value_name' )
                ->after( 'attribute_value_id' )
                ->nullable();

            $table->foreign( 'attribute_value_id' )
                ->references( 'id' )
                ->on( 'attribute_values' )
                ->onDelete( 'set null' )
                ->onUpdate( 'restrict' );
        } );

        Schema::table( 'product_categories', function (Blueprint $table) {
            $table->foreign( 'product_category_additional_user_id' )
                ->references( 'id' )
                ->on( 'users' )
                ->onDelete( 'set null' )
                ->onUpdate( 'restrict' );
        } );

        Schema::table( 'product_tags_tags', function (Blueprint $table) {
            $table->renameColumn( 'product_type', 'productable_type' );
            $table->renameColumn( 'product_id', 'productable_id' );
        } );

        Schema::table( 'tasks', function (Blueprint $table) {
            $table->foreign( 'task_category_id' )
                ->references( 'id' )
                ->on( 'product_categories' )
                ->onDelete( 'set null' )
                ->onUpdate( 'restrict' );
        } );


        /************************/

        Schema::table( 'product_tags_tags', function (Blueprint $table) {
            $table->renameColumn( 'tag_id', 'product_tags_id' );
            $table->foreign( 'product_tags_id' )
                ->references( 'id' )
                ->on( 'product_tags' )
                ->onDelete( 'set null' )
                ->onUpdate( 'restrict' );
        });

        Schema::table( 'details', function (Blueprint $table) {
            $table->renameColumn( 'normal_product_id', 'productable_id' );
        });

        Schema::table( 'details', function (Blueprint $table) {
            $table->string( 'productable_type' )
                ->after( 'productable_id' )
                ->nullable();
        });

        Schema::table( 'normal_products', function (Blueprint $table) {
            $table->foreign( 'product_category_id' )
                ->references( 'id' )
                ->on( 'product_categories' )
                ->onDelete( 'set null' )
                ->onUpdate( 'restrict' );
        });

        Schema::table( 'custom_products', function (Blueprint $table) {
            $table->foreign( 'custom_product_category_id' )
                ->references( 'id' )
                ->on( 'product_categories' )
                ->onDelete( 'set null' )
                ->onUpdate( 'restrict' );
        });

        Schema::table( 'custom_services', function (Blueprint $table) {
            $table->foreign( 'custom_services_category_id' )
                ->references( 'id' )
                ->on( 'product_categories' )
                ->onDelete( 'set null' )
                ->onUpdate( 'restrict' );
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
