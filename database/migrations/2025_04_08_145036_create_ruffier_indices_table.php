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
        Schema::create('ruffier_indices', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('pulse_1');
            $table->unsignedInteger('pulse_2');
            $table->unsignedInteger('pulse_3');
            $table->float('index');
            $table->text('result');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ruffier_indices');
    }
};
