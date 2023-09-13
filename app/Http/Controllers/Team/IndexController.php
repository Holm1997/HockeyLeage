<?php

namespace App\Http\Controllers\Team;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\Season;


class IndexController extends Controller
{
    public function __invoke(Season $season) {
       
        $teams = Team::all();
        return view('team.index', compact('teams', 'season'));
    }
}