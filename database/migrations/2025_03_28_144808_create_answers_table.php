<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quiz_id')->constrained()->onDelete('cascade');
            $table->string('answer_text');
            $table->foreignId('next_quiz_id')->nullable()->constrained('quizzes')->onDelete('set null');
            $table->enum('answer_type', ['predefined', 'text', 'number', 'date'])
                ->default('predefined');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('answers');
    }
};
