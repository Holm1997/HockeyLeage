<?php

namespace App\Http\Controllers\Match;

use Illuminate\Http\Request;
use App\Models\Tournament;
use App\Models\TournamentMatches;
use App\Http\Controllers\Controller;
use App\Models\Season;
use App\Models\Team;
use App\Models\MatchPlayer;
use App\Models\Player;

class ShowController extends Controller
{
    public function __invoke(TournamentMatches $match)
    {   
        $match = TournamentMatches::where('id', $match->id)->first();
        $home = Team::where('id', $match->hometeam_id)->first();
        $guest = Team::where('id', $match->guestteam->id)->first();
        $match['home_name'] = $home->title . ' ' . $home->team_year;
        $match['guest_name'] = $guest->title . ' ' . $guest->team_year;

        $players = MatchPlayer::where('match_id', $match->id)->get();
        
        if (count($players) != 0) {

            foreach ($players as $player) {

                $player_info = Player::where('id', $player->player_id)->first();

                if ($player->team_id == $home->id) {

                    $home_players[$player->id] = $player_info; 

                } elseif ($player->team_id == $guest->id) {

                    $guest_players[$player->id] = $player_info;

                }
            }
        

            if ($home_players and $guest_players) {
        
                return view('match.show', compact('match', 'home_players', 'guest_players'));

            } else{

                return view('match.show', compact('match'));
            }

        } else {
            
            return view('match.show', compact('match'));
        }
    }
}