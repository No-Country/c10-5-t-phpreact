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
        Schema::create('form_register', function (Blueprint $table) {
            $table->id();
            $table->string('name', 60);
            $table->string('lastname', 60);
            $table->string('email');

            $table->unsignedBigInteger('role_stack_id');
            $table->unsignedBigInteger('horary_id');
            $table->unsignedBigInteger('experience_id');
            $table->unsignedBigInteger('vertical_id');
            $table->unsignedBigInteger('technology_id');
            $table->unsignedBigInteger('country_id');

            $table->foreign('role_stack_id')
                ->references('id')
                ->on('role_stacks');

            $table->foreign('horary_id')
                ->references('id')
                ->on('horary');

            $table->foreign('experience_id')
                ->references('id')
                ->on('experiences');

            $table->foreign('vertical_id')
                ->references('id')
                ->on('vertical');

            $table->foreign('technology_id')
                ->references('id')
                ->on('technologies');

            $table->foreign('country_id')
                ->references('id')
                ->on('countries');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_register');
    }
};
