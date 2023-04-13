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
        Schema::create('team_ratings', function (Blueprint $table) {
            $table->id();

            $table->enum('week', ['1', '2', '3', '4'])->default('1');
            $table->date('date');

            $table->boolean('compromise')->default(false);
            $table->boolean('communication')->default(false);
            $table->boolean('initiative')->default(false);
            $table->boolean('proactivity')->default(false);
            $table->boolean('organization')->default(false);
            $table->boolean('collaboration')->default(false);

            $table->text('feedback')->nullable();

            $table->tinyInteger('sprint_rating')->nullable();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('team_id');

            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->foreign('team_id')
                ->references('id')
                ->on('teams');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_ratings');
    }
};
