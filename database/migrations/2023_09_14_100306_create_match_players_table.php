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
        Schema::create('match_players', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('match_id');
            $table->unsignedBigInteger('team_id');
            $table->unsignedBigInteger('player_id');

            $table->index('match_id', 'match_player_match_idx');
            $table->index('team_id', 'match_player_team_idx');
            $table->index('player_id', 'match_player_player_idx');

            $table->foreign('match_id', 'match_player_match_fk')->on('tournament_matches')->references('id');
            $table->foreign('team_id', 'match_player_team_fk')->on('teams')->references('id');
            $table->foreign('player_id', 'match_player_player_fk')->on('players')->references('id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('match_players');
    }
};
