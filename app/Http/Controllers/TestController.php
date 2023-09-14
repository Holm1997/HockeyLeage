<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\TournamentMatches;

class TestController extends Controller
{
    public function index()
    {
        $matches = TournamentMatches::where('tournament_id', 1)->get();
        
        foreach ($matches as $match){
            $home  = Team::where('id', $match->hometeam_id)->first();
            $away = Team::where('id', $match->guestteam_id)->first();
            $match['home_name'] = $home->title . ' ' . $home->team_year;
            $match['guest_name'] = $away->title . ' ' . $away->team_year;
        }
        dd($matches);
        
        
    }
}
