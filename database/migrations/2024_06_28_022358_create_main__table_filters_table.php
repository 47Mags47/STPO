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
        Schema::create('main__table_filters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('main__users');
            $table->foreignId('table_id')->constrained('glossary__main__page_tables');
            $table->json('filters');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main__table_filters');
    }
};
