<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void {
        Schema::create('quiz_flows', function (Blueprint $table) {
            $table->id();
            $table->string('flow_name');
            $table->foreignId('quiz_id')->constrained()->onDelete('cascade');
            $table->integer('order'); // Order in flow
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('quiz_flows');
    }
};
