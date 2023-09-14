<?php

namespace App\Http\Controllers\Match;

use Illuminate\Http\Request;
use App\Models\Tournament;
use App\Models\TournamentMatches;
use App\Http\Controllers\Controller;
use App\Models\Season;
use App\Models\Teams;

class UpdateController extends Controller
{
    public function __invoke()
    {   
        dd($_POST);
        $data = request()->validate([
            'hometeam_id' => 'string',
            'guestteam_id' => 'string',
            'tournament_id' => 'string',
        ]);
        TournamentMatches::create($data);
        return redirect()->route('teams.index');
    }
}