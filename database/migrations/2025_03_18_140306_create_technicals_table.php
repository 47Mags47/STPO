<?php

use App\Models\CSVI\Technical\Folder;
use App\Models\CSVI\Technical\Mark;
use App\Models\CSVI\Technical\Type;
use App\Models\Main\Division;
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
        Schema::create('csvi__technical__types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('csvi__technical__marks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id')->constrained(Type::getTableName());
            $table->string('name');
        });

        Schema::create('csvi__technical__folders', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id')->nullable();
            $table->foreignId('division_id')->constrained(Division::getTableName());
            $table->string('name');
        });

        Schema::create('csvi__technical__technicals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('division_id')->constrained(Division::getTableName());
            $table->foreignId('type_id')->constrained(Type::getTableName());
            $table->foreignId('mark_id')->constrained(Mark::getTableName());
            $table->foreignId('folder_id')->nullable()->constrained(Folder::getTableName());

            $table->string('serial_number')->nullable()->unique();
            $table->string('inventory_number')->nullable();
            $table->string('model')->nullable();
            $table->date('exp_date');
            $table->boolean('require_replacement')->default(false);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('csvi__technical__technicals');
        Schema::dropIfExists('csvi__technical__folders');
        Schema::dropIfExists('csvi__technical__marks');
        Schema::dropIfExists('csvi__technical__types');
    }
};
