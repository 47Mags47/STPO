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
        Schema::create('main__division__programmers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('division_id')->constrained('main__divisions');
            $table->foreignId('programmer_id')->constrained('main__users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main__division__programmers');
    }
};
