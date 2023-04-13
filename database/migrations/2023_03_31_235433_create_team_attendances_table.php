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
        Schema::create('team_attendances', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->enum('week', ['1', '2', '3', '4'])->default('1');
            $table->boolean('attended')->default(false);
            $table->boolean('justification')->default(false);

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
        Schema::dropIfExists('team_attendances');
    }
};
