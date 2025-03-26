<?php

use App\Models\Main\Department;
use App\Models\Main\Modul;
use App\Models\Main\Permission;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('main__departments', function (Blueprint $table) {
            $table->string('code')->primary();
            $table->string('name');
        });

        Schema::create('main__moduls', function (Blueprint $table) {
            $table->string('code')->primary();
            $table->string('name');
            $table->string('route');
            $table->string('department_code');
            $table->foreign('department_code')->references('code')->on(Department::getTableName());
            $table->softDeletes();
        });

        Schema::create('main__modul_pivot_permission', function (Blueprint $table) {
            $table->id();
            $table->string('modul_code');
            $table->foreign('modul_code')->references('code')->on(Modul::getTableName());
            $table->string('permission_code');
            $table->foreign('permission_code')->references('code')->on(Permission::getTableName());
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main__moduls');
        Schema::dropIfExists('main__departments');
    }
};
