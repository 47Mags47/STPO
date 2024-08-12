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
        Schema::create('csvi__appeal__appeal_messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('appeal_id')->constrained('csvi__appeal__appeals');
            $table->foreignId('sender_id')->nullable()->constrained('main__users');
            //$table->foreignId('recipient_id')->nullable()->constrained('main__users');
            $table->boolean('is_file')->default(false);
            $table->boolean('is_image')->default(false);
            $table->boolean('is_system')->default(false);

            $table->text('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('csvi__appeal__appeal_messages');
    }
};
