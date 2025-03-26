<?php

use App\Models\CSVI\Veteran\Date;
use App\Models\Main\Division;
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
        Schema::create('csvi__veteran__dates', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->boolean('is_actual')->default(false);
            $table->softDeletes();
        });

        Schema::create('csvi__veteran__raports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('division_id')->constrained(Division::getTableName());
            $table->foreignId('created_by')->constrained(User::getTableName());
            $table->foreignId('in_date')->constrained(Date::getTableName());

            $table->integer('all');
            $table->integer('el');
            $table->integer('mfc');
            $table->boolean('open')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('csvi__veteran__raports');
        Schema::dropIfExists('csvi__veteran__dates');
    }
};
