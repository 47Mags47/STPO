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
        Schema::create('orvdkn__veteran__raports', function (Blueprint $table) {
            $table->id();
            $table->integer('all')->nullable();
            $table->integer('el')->nullable();
            $table->integer('mfc')->nullable();
            $table->foreignId('in_date_id')->constrained('orvdkn__veteran__in_dates');
            $table->foreignId('division_id')->constrained('main__divisions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orvdkn__veteran__raports');
    }
};
