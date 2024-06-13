<?php

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
        Schema::create('main__moduls', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('link');
            $table->foreignId('department_id')->constrained(table: 'glossary__modul_departments');
            $table->boolean('visible')->default(false);
            $table->boolean('local')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main__moduls');
    }
};
