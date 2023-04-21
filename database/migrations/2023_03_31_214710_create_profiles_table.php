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
            $table->unsignedBigInteger('user_id')->nullable()->unique();

            $table->string('specialty', 100)->nullable();
            $table->string('url')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('github')->nullable();
            $table->string('education')->nullable();
            $table->integer('led_teams_quantity')->nullable();
            $table->integer('simulations_quantity')->nullable();

            
            $table->unsignedBigInteger('country_id')->nullable();
            $table->unsignedBigInteger('vertical_id')->nullable();
            $table->unsignedBigInteger('horary_id')->nullable();
            $table->unsignedBigInteger('role_stack_id')->nullable();
            $table->unsignedBigInteger('english_level_id')->nullable();

            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->foreign('country_id')
                ->references('id')
                ->on('countries');

            $table->foreign('vertical_id')
                ->references('id')
                ->on('vertical');

            $table->foreign('role_stack_id')
                ->references('id')
                ->on('role_stacks');

            $table->foreign('english_level_id')
                ->references('id')
                ->on('english_levels');

            $table->foreign('horary_id')
                ->references('id')
                ->on('horary');
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
