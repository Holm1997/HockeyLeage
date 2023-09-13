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

        return view('player/index', compact('players'));
    }

    public function create() {
        
        $teams = Team::all();
        return view('player/create', compact('teams'));
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

    public function show(Player $player) {
        
        return view('player/show', compact('player'));
    }

    public function edit(Player $player) {
        
        $team = $player->teams->first();

        return view('player/edit', compact('player', 'team'));

    }

    public function update(Player $player) {
        $data = request()->validate([
            'last_name' => 'string',
            'first_name' => 'string',
            'birthday' => 'string',
            'position' => 'string',
            'team_id' => 'string',
        ]);

        $team_id = (int)$data['team_id'];
        unset($data['team_id']);

        $player->update($data);

        return redirect()->route("teams.show", $team_id);

    }

    public function destroy(Player $player) {

        $team = $player->teams->first();
        $playerTeam = PlayerTeam::where([
            'player_id' => $player->id,
            'team_id' => $team->id,
        ]);
        $playerTeam->delete();
        $player->delete();
        return redirect()->route("teams.show", $team->id);

    }
}
