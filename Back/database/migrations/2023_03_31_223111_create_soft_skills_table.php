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
        Schema::create('soft_skills', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('profile_id')->nullable();
            $table->string('name', 60);
            $table->integer('level');

            $table->timestamps();

            $table->foreign('profile_id')
                ->references('id')
                ->on('profiles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soft_skills');
    }
};
