<?php

use App\Models\CSVI\Appeal\Appeal;
use App\Models\CSVI\Appeal\Category;
use App\Models\CSVI\Appeal\Status;
use App\Models\CSVI\Appeal\Them;
use App\Models\Main\User;
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
        Schema::create('csvi__appeal__category', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('csvi__appeal__them', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained(Category::getTableName());
            $table->string('name');
        });

        Schema::create('csvi__appeal__statuses', function (Blueprint $table) {
            $table->string('code')->primary();
            $table->string('name');
        });

        Schema::create('csvi__appeal__appeals', function (Blueprint $table) {
            $table->id();
            $table->string('office')->nullable();
            $table->text('comment');

            $table->foreignId('them_id')->constrained(Them::getTableName());
            $table->string('status_code');
            $table->foreign('status_code')->references('code')->on(Status::getTableName());

            $table->foreignId('sender_id')->constrained(User::getTableName());
            $table->foreignId('accepted_by')->nullable()->constrained(User::getTableName());
            $table->foreignId('closed_by')->nullable()->constrained(User::getTableName());
            $table->foreignId('restored_by')->nullable()->constrained(User::getTableName());

            $table->timestamps();
        });

        Schema::create('csvi__appeal__workers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('appeal_id')->constrained(Appeal::getTableName());
            $table->foreignId('worker_id')->constrained(User::getTableName());
        });

        Schema::create('csvi__appeal__messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('appeal_id')->constrained(Appeal::getTableName());
            $table->foreignId('sender_id')->constrained(User::getTableName());
            $table->text('message');
            $table->boolean('is_system')->nullable()->default(false);
            $table->boolean('is_file')->nullable()->default(false);
            $table->boolean('is_image')->nullable()->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('csvi__appeal__messages');
        Schema::dropIfExists('csvi__appeal__appeals');
        Schema::dropIfExists('csvi__appeal__statuses');
        Schema::dropIfExists('csvi__appeal__them');
        Schema::dropIfExists('csvi__appeal__category');
        Schema::dropIfExists('csvi__appeal__workers');
    }
};
