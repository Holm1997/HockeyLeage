<?php

namespace App\Http\Controllers\Match;

use Illuminate\Http\Request;
use App\Models\Tournament;
use App\Models\TournamentMatches;
use App\Http\Controllers\Controller;
use App\Models\Season;
use App\Models\Team;

class IndexController extends Controller
{
    public function __invoke(Tournament $tournament)
    {   
        $matches = TournamentMatches::where('tournament_id',$tournament->id)->get();
        
        foreach ($matches as $match){
            $home  = Team::where('id', $match->hometeam_id)->first();
            $away = Team::where('id', $match->guestteam_id)->first();
            $match['home_name'] = $home->title . ' ' . $home->team_year;
            $match['guest_name'] = $away->title . ' ' . $away->team_year;
        }
            
        
        
        
        return view('match/index', compact('tournament','matches'));
    }
}