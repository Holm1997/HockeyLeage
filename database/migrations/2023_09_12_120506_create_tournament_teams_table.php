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
        Schema::create('tournament_teams', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('tournament_id');
            $table->unsignedBiginteger('team_id');

            $table->index('tournament_id', 'tournament_teams_tournament_idx');
            $table->index('team_id', 'tournament_teams_team_idx');

            $table->foreign('tournament_id', 'tournament_teams_tournament_fk')->on('tournaments')->references('id');
            $table->foreign('team_id', 'tournament_teams_team_fk')->on('teams')->references('id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tournament_teams');
    }
};
