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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('car_name',255);
            $table->string('car_logo',255);
            $table->string('price');
            $table->string('user_fullname',500);
            $table->string('user_email',300);
            $table->string('user_phone');
            $table->string('place_reception',500);
            $table->string('date_of_addmision');
            $table->string('date_of_return');
            $table->string('driver_status_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
