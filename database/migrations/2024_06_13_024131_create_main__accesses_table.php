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
        Schema::create('main__accesses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('modul_id')->constrained('main__moduls');
            $table->foreignId('user_id')->constrained('main__users');
            $table->foreignId('level_id')->constrained('glossary__main__access_levels');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main__accesses');
    }
};
