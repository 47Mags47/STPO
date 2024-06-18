<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('main__alerts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id')->constrained('glossary__main__alert_types');
            $table->foreignId('from_id')->constrained('main__users');
            $table->foreignId('sender_id')->nullable()->constrained('main__users');
            $table->foreignId('link')->nullable();
            $table->text('message');
            $table->boolean('visible')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main__alerts');
    }
};
