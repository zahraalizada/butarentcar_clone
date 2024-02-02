<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->string('car_name');
            $table->string('fullname');
            $table->string('email');
            $table->string('phone');
            $table->string('reception_place');
            $table->string('reserve_date');
            $table->string('return_date');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('tenants');
    }
};
