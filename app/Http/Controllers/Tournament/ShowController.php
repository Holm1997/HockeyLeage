<?php

namespace App\Http\Controllers\Tournament;

use Illuminate\Http\Request;
use App\Models\Tournament;
use App\Http\Controllers\Controller;
use App\Models\Season;


class ShowController extends Controller
{
    public function __invoke(Season $season, Tournament $tournament)
    {
        $teams = $tournament->teams;
        return view('tournament.show', compact('tournament','teams', 'season'));
    }
}
