<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Player;
use App\Models\Team;
use App\Models\PlayerTeam;

class PlayerController extends Controller
{
    public function index() {
        $players = Player::all();

        return view('players', compact('players'));
    }

    public function create() {
        $teams = Team::all();
        return view('player_create', compact('teams'));
    }

    public function store() {

        $data = request()->validate([
            'last_name' => 'string',
            'first_name' => 'string',
            'birthday' => 'string',
            'position' => 'string',
            'team_id' => 'string',
        ]);

        $team_id = (int)$data['team_id'];
        unset($data['team_id']);

        Player::create($data);

        $player_id = Player::where([
            ['last_name',$data['last_name']],
            ['first_name', $data['first_name']],
            ['birthday', $data['birthday']],
            ['position', $data['position']],
        ])->first('id');
        
        PlayerTeam::create([
            'player_id' => $player_id->id,
            'team_id' => $team_id,
        ]);

        return redirect()->route("teams.show", $team_id);
    }
}
