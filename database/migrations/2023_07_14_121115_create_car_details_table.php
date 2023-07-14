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
        Schema::create('car_details', function (Blueprint $table) {
            $table->id();
            $table->string('img',500);
            $table->string('production_year');
            $table->string('gearbox');
            $table->string('engine_power');
            $table->string('climate_status');
            $table->string('number_of_doors');
            $table->string('number_of_seats');
            $table->string('type_of_seats');
            $table->string('baggage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_details');
    }
};
