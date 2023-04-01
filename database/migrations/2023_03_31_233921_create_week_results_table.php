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
        Schema::create('week_results', function (Blueprint $table) {
            $table->id();
            $table->string('weeks', 10);
            $table->string('observations');
            $table->string('tasks');
            $table->integer('sprint_qualifications');
            $table->tinyInteger('compromise');
            $table->tinyInteger('communication');
            $table->tinyInteger('initiave');
            $table->tinyInteger('organization');
            $table->tinyInteger('collaboration');
            $table->tinyInteger('proactivy');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('week_results');
    }
};
