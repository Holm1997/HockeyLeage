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
        Schema::create('tournament_matches', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('tournament_id');
            $table->unsignedBigInteger('hometeam_id');
            $table->unsignedBigInteger('guestteam_id');

            $table->index('tournament_id','tournament_matches_tournament_idx');
            $table->index('hometeam_id','tournament_matches_hometeam_idx');
            $table->index('guestteam_id','tournament_matches_guestteam_idx');

            $table->enum('winner', [0, 1, 2]);

            $table->foreign('tournament_id', 'tournament_matches_tournament_fk')->on('tournaments')->references('id');
            $table->foreign('hometeam_id', 'tournament_matches_hometeam_fk')->on('teams')->references('id');
            $table->foreign('guestteam_id', 'tournament_matches_guestteam_fk')->on('teams')->references('id');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tournament_matches');
    }
};
