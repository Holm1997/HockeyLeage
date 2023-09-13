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
        foreach ($matches as $match)
        {
            $m[$match->id]['id'] = $match->id;
            $m[$match->id]['home'] = $match->homeTeam;
            $m[$match->id]['guest'] = $match->guestTeam;
            
        }
        
        
        return view('match/index', compact('m'));
    }
}