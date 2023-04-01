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
        Schema::create('user_controls', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->tinyInteger('attendance');
            $table->tinyInteger('justification');

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('week_result_id');

            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->foreign('week_result_id')
            ->references('id')
                ->on('week_results');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_controls');
    }
};
