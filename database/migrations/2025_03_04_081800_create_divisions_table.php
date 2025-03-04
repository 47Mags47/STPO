<?php

use App\Models\Main\City;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('main__cityes', function (Blueprint $table) {
            $table->string('code')->primary();
            $table->string('name');
        });

        Schema::create('main__divisions', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->string('city_code')->nullable();
            $table->foreign('city_code')->references('code')->on(City::getTableName());
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('main__divisions');
        Schema::dropIfExists('main__cityes');
    }

};
