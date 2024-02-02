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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo_img',255);
            $table->string('phone',255);
            $table->string('phone_wp',255);
            $table->string('email',500);
            $table->string('address',500);
            $table->text('address_map');
            $table->string('hours');
            $table->string('copyright');
            $table->string('cover_img',500);
            $table->string('cover_title',500);
            $table->text('cover_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
