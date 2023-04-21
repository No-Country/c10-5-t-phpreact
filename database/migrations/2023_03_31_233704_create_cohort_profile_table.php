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
        Schema::create('cohort_profile', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('cohort_id');
            $table->unsignedBigInteger('profile_id');

            $table->foreign('cohort_id')
                ->references('id')
                ->on('cohorts');

            $table->foreign('profile_id')
            ->references('id')
                ->on('profiles');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cohort_user');
    }
};
