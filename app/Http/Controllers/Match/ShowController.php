<?php

namespace App\Http\Controllers\Match;

use Illuminate\Http\Request;
use App\Models\Tournament;
use App\Models\TournamentMatches;
use App\Http\Controllers\Controller;
use App\Models\Season;
use App\Models\Team;

class ShowController extends Controller
{
    public function __invoke(TournamentMatches $match)
    {   
        $match = TournamentMatches::where('id', $match->id)->first();
        $home = Team::where('id', $match->hometeam_id)->first();
        $guest = Team::where('id', $match->guestteam->id)->first();
        $match['home_name'] = $home->title . ' ' . $home->team_year;
        $match['guest_name'] = $guest->title . ' ' . $guest->team_year;

        //dd($match);
        
        return view('match/show', compact('match'));
    }
}