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
        Schema::create('main__user__thems', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('main__users');
            $table->foreignId('them_id')->constrained('glossary__user__thems');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main__user__thems');
    }
};
