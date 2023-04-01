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
        Schema::create('team_week', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('week_result_id');
            $table->unsignedBigInteger('team_id');

            $table->foreign('week_result_id')
                ->references('id')
                ->on('week_results');

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
        Schema::dropIfExists('team_week');
    }
};
