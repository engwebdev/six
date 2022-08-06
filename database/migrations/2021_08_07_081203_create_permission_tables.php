<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableNames = config('permission.table_names');
        $columnNames = config('permission.column_names');

        if (empty($tableNames)) {
            throw new Exception('Error: config/permission.php not loaded. Run [php artisan config:clear] and try again.');
        }

        Schema::create($tableNames['permissions'], function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');       // For MySQL 8.0 use string('name', 125);
            $table->string('guard_name'); // For MySQL 8.0 use string('guard_name', 125);
            $table->timestamps();

            $table->unique(['name', 'guard_name']);
        });

        Schema::create($tableNames['roles'], function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');       // For MySQL 8.0 use string('name', 125);
            $table->string('guard_name'); // For MySQL 8.0 use string('guard_name', 125);
            $table->timestamps();

            $table->unique(['name', 'guard_name']);
        });

        Schema::create($tableNames['model_has_permissions'], function (Blueprint $table) use ($tableNames, $columnNames) {
            $table->unsignedBigInteger('permission_id');

            $table->string('model_type');
            $table->unsignedBigInteger($columnNames['model_morph_key']);
            $table->index([$columnNames['model_morph_key'], 'model_type'], 'model_has_permissions_model_id_model_type_index');

            $table->foreign('permission_id')
                ->references('id')
                ->on($tableNames['permissions'])
                ->onDelete('cascade');

            $table->primary(['permission_id', $columnNames['model_morph_key'], 'model_type'],
                    'model_has_permissions_permission_model_type_primary');
        });

        Schema::create($tableNames['model_has_roles'], function (Blueprint $table) use ($tableNames, $columnNames) {
            $table->unsignedBigInteger('role_id');

            $table->string('model_type');
            $table->unsignedBigInteger($columnNames['model_morph_key']);
            $table->index([$columnNames['model_morph_key'], 'model_type'], 'model_has_roles_model_id_model_type_index');

            $table->foreign('role_id')
                ->references('id')
                ->on($tableNames['roles'])
                ->onDelete('cascade');

            $table->primary(['role_id', $columnNames['model_morph_key'], 'model_type'],
                    'model_has_roles_role_model_type_primary');
        });

        Schema::create($tableNames['role_has_permissions'], function (Blueprint $table) use ($tableNames) {
            $table->unsignedBigInteger('permission_id');
            $table->unsignedBigInteger('role_id');

            $table->foreign('permission_id')
                ->references('id')
                ->on($tableNames['permissions'])
                ->onDelete('cascade');

            $table->foreign('role_id')
                ->references('id')
                ->on($tableNames['roles'])
                ->onDelete('cascade');

            $table->primary(['permission_id', 'role_id'], 'role_has_permissions_permission_id_role_id_primary');
        });

        DB::table('roles')->insert([
            ['id' => 1, 'name' => 'admin', 'guard_name' => 'api', 'created_at' => '2021-08-04 11:49:35', 'updated_at' => '2021-11-22 12:55:42'],
            ['id' => 2, 'name' => 'system', 'guard_name' => 'api', 'created_at' => '2021-08-04 11:49:35', 'updated_at' => '2021-11-22 12:55:42'],
            ['id' => 3, 'name' => 'business_man', 'guard_name' => 'api', 'created_at' => '2021-08-04 11:49:35', 'updated_at' => '2021-11-22 12:55:42'],
            ['id' => 4, 'name' => 'shopkeeper', 'guard_name' => 'api', 'created_at' => '2021-08-04 11:49:35', 'updated_at' => '2021-11-22 12:55:42'],
            ['id' => 5, 'name' => 'user', 'guard_name' => 'api', 'created_at' => '2021-08-04 11:49:35', 'updated_at' => '2021-11-22 12:55:42'],
            ['id' => 6, 'name' => 'customer', 'guard_name' => 'api', 'created_at' => '2021-08-04 11:49:35', 'updated_at' => '2021-11-22 12:55:42'],
        ]);

        DB::table('oauth_clients')->insert([
            ['id' => 1, 'user_id' => null, 'name' => 'Laravel Personal Access Client', 'secret' => 'zH7xs99FGvkxLfZOZpGaxxnO3N4w2bi3rnXx6LNl', 'provider' => null, 'redirect' => 'http://localhost', 'personal_access_client' => 1, 'password_client' => 0, 'revoked' => 0, 'created_at' => '2021-08-07 04:41:40', 'updated_at' => '2021-08-07 04:41:40'],
            ['id' => 2, 'user_id' => null, 'name' => 'Laravel Password Grant Client', 'secret' => '5hCidhzkLl02h5SMTgBx4k3v8WP8aag79BILkysD', 'provider' => 'users', 'redirect' => 'http://localhost', 'personal_access_client' => 0, 'password_client' => 1, 'revoked' => 0, 'created_at' => '2021-08-07 04:41:40', 'updated_at' => '2021-08-07 04:41:40'],
            ['id' => 3, 'user_id' => 1, 'name' => 'adminTest', 'secret' => null, 'provider' => null, 'redirect' => 'http://localhost/auth/callback', 'personal_access_client' => 0, 'password_client' => 0, 'revoked' => 0, 'created_at' => '2021-08-28 01:30:38', 'updated_at' => '2021-08-28 01:30:38'],
        ]);

        DB::table('model_has_roles')->insert([
            ['role_id' => 2, 'model_type' => 'App\Models\User', 'model_id' => 1],
            ['role_id' => 5, 'model_type' => 'App\Models\User', 'model_id' => 2],
            ['role_id' => 4, 'model_type' => 'App\Models\User', 'model_id' => 3],
        ]);

        app('cache')
            ->store(config('permission.cache.store') != 'default' ? config('permission.cache.store') : null)
            ->forget(config('permission.cache.key'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $tableNames = config('permission.table_names');

        if (empty($tableNames)) {
            throw new Exception('Error: config/permission.php not found and defaults could not be merged. Please publish the package configuration before proceeding, or drop the tables manually.');
        }

        Schema::drop($tableNames['role_has_permissions']);
        Schema::drop($tableNames['model_has_roles']);
        Schema::drop($tableNames['model_has_permissions']);
        Schema::drop($tableNames['roles']);
        Schema::drop($tableNames['permissions']);
    }
}
