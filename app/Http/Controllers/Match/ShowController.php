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
        $match = TournamentMatches::where('id', $match->id)->get();
       
        
        
        return view('match/show', compact('match'));
    }
}