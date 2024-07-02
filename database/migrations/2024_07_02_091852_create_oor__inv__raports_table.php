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
        Schema::create('oor__inv__raports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('worker_id')->constrained('main__users');
            $table->foreignId('in_date_id')->constrained('oor__inv__in_dates');
            $table->boolean('checked')->default(false);
            $table->boolean('error')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oor__inv__raports');
    }
};
