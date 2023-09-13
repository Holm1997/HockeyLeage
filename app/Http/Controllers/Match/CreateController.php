<?php

namespace App\Http\Controllers\Match;

use Illuminate\Http\Request;
use App\Models\Tournament;
use App\Http\Controllers\Controller;
use App\Models\Season;
use App\Models\Teams;

class CreateController extends Controller
{
    public function __invoke(Tournament $tournament)
    {   
        $teams = $tournament->teams;
        return view('match.create', compact('tournament', 'teams'));
    }
}