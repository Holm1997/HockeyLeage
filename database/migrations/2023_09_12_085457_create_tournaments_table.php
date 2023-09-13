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
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->year('teams_year');
            $table->date('start_date');
            $table->date('end_date');
            $table->unsignedBigInteger('season_id');
            $table->index('season_id', 'tournament_season_idx');
            $table->foreign('season_id', 'tournament_season_fk')->on('seasons')->references('id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tournaments');
    }
};
