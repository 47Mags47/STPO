<?php

use App\Models\Main\Division;
use App\Models\Main\Permission;
use App\Models\Main\Role;
use App\Models\Main\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('main__users', function (Blueprint $table) {
            $table->id();
            $table->string('last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('full_name');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('login')->unique();
            $table->string('password');
            $table->string('logo')->nullable();

            $table->foreignId('division_id')->constrained(Division::getTableName());

            $table->string('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        // РОЛИ И ПРАВА
        Schema::create('main__roles', function (Blueprint $table) {
            $table->string('code')->primary();
            $table->string('name');
        });

        Schema::create('main__permissions', function (Blueprint $table) {
            $table->string('code')->primary();
            $table->string('name');
        });

        Schema::create('main__user_pivot_role', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(User::getTableName());

            $table->string('role_code');
            $table->foreign('role_code')->references('code')->on(Role::getTableName());
        });

        Schema::create('main__user_pivot_permission', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(User::getTableName());

            $table->string('permission_code');
            $table->foreign('permission_code')->references('code')->on(Permission::getTableName());
        });

        Schema::create('main__role_pivot_permission', function (Blueprint $table) {
            $table->id();
            $table->string('role_code');
            $table->foreign('role_code')->references('code')->on(Role::getTableName());
            $table->string('permission_code');
            $table->foreign('permission_code')->references('code')->on(Permission::getTableName());
        });

        // СИСТЕМНЫЕ ТАБЛИЦЫ
        Schema::create('sys__password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sys__sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('sys__sessions');
        Schema::dropIfExists('sys__password_reset_tokens');
        Schema::dropIfExists('main__role_pivot_permission');
        Schema::dropIfExists('main__user_pivot_permission');
        Schema::dropIfExists('main__user_pivot_role');
        Schema::dropIfExists('main__permissions');
        Schema::dropIfExists('main__roles');
        Schema::dropIfExists('main__users');
    }
};
