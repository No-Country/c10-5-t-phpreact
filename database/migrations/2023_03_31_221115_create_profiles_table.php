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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('led_teams_quantity');
            $table->integer('simulations_quantity');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('profile_data_id');
            $table->unsignedBigInteger('calification_id');

            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->foreign('profile_data_id')
                ->references('id')
                ->on('profile_data')
                ->onDelete('cascade');

            $table->foreign('calification_id')
                ->references('id')
                ->on('califications')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
