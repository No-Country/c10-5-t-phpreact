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
        Schema::create('profile_soft_skill', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('profile_id');
            $table->unsignedBigInteger('soft_skill_id');

            $table->foreign('profile_id')
                ->references('id')
                ->on('profiles');

            $table->foreign('soft_skill_id')
                ->references('id')
                ->on('soft_skills');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_soft_skill');
    }
};
