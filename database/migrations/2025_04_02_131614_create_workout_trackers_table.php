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
        Schema::create('workout_trackers', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('pushups');
            $table->unsignedInteger('situps');
            $table->unsignedInteger('squats');
            $table->unsignedInteger('dips');
            $table->unsignedInteger('pullups');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workout_trackers');
    }
};
