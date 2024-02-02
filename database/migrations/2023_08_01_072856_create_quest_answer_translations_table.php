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
        Schema::create('quest_answer_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quest_answer_id')->constrained()->onDelete('cascade');
            $table->string('locale');
            $table->string('question',500);
            $table->text('answer');

            $table->timestamps();

            $table->unique(['quest_answer_id','locale']);
//            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quest_answer_translations');
    }
};
