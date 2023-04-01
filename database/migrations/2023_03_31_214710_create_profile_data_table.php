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
        Schema::create('profile_data', function (Blueprint $table) {
            $table->id();
            $table->string('specialty', 100);
            $table->string('country', 50);
            $table->string('url');
            $table->string('linkedin');
            $table->string('github');
            $table->string('education');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_data');
    }
};
