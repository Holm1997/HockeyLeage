<?php

namespace App\Http\Controllers\Team;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Team;


class ShowController extends Controller
{
    

    public function __invoke(Team $team) {
        $players = $team->players;
        return view('team/show', compact('team', 'players'));

    }
}