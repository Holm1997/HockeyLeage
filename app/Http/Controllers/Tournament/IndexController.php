<?php

namespace App\Http\Controllers\Tournament;

use Illuminate\Http\Request;
use App\Models\Tournament;
use App\Http\Controllers\Controller;
use App\Models\Season;

class IndexController extends Controller
{
    public function __invoke()
    {
        $seasons = Season::all()->sortDesc();
        $tournaments = Tournament::all();
        return view('tournament.index', compact('tournaments', 'seasons'));
    }
}
