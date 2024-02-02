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
            $table->string('car_id');
            $table->string('img');
            $table->string('year');
            $table->string('gearbox');
            $table->string('engine');
            $table->string('freezer');
            $table->string('door');
            $table->string('person');
            $table->string('seat');
            $table->string('baggage');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('car_details');
    }
};
