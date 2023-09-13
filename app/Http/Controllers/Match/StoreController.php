<?php

namespace App\Http\Controllers\Match;

use Illuminate\Http\Request;
use App\Models\Tournament;
use App\Models\TournamentMatches;
use App\Http\Controllers\Controller;
use App\Models\Season;
use App\Models\Teams;

class StoreController extends Controller
{
    public function __invoke()
    {   
        $data = request()->validate([
            'hometeam_id' => 'string',
            'guestteam_id' => 'string',
            'tournament_id' => 'string',
        ]);
        TournamentMatches::create($data);
        return redirect()->route('teams.index');
    }
}