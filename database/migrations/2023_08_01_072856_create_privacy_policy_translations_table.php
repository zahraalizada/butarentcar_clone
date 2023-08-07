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
        Schema::create('privacy_policy_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('privacy_policy_id')->constrained()->onDelete('cascade');
            $table->string('locale');
            $table->string('title',500);
            $table->text('description');

            $table->timestamps();

            $table->unique(['privacy_policy_id','locale']);
//            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('privacy_policy_translations');
    }
};
