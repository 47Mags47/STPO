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
        Schema::create('oor__inv__data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('raport_id')->constrained('oor__inv__raports');
            $table->string('coord');
            $table->string('value')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oor__inv__data');
    }
};
