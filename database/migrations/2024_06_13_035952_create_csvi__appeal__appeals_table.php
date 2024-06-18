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
        Schema::create('csvi__appeal__appeals', function (Blueprint $table) {
            $table->id();
            $table->string('office')->nullable();
            $table->text('comment');

            $table->foreignId('them_id')->nullable()->constrained('glossary__csvi__appeal__thems');
            $table->foreignId('status_id')->constrained('glossary__csvi__appeal__statuses');
            $table->foreignId('sender_id')->constrained('main__users');
            $table->foreignId('worker_id')->nullable()->constrained('main__users');
            $table->foreignId('closet_at')->nullable()->constrained('main__users');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('csvi__appeal__appeals');
    }
};
