<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Team;


class TeamController extends Controller
{
    public function index() {
        $teams = Team::all();
        return view('team/index', compact('teams'));
    }

    public function create() {
        return view('team/create');

    }

    public function store() {
        $data = request()->validate([
            'title' => 'string',
            'team_year' => 'string',
        ]);

        Team::create($data);
        return redirect()->route('teams.index');
    }

    public function show(Team $team) {
        $players = $team->players;
        return view('team/show', compact('team', 'players'));

    }

    public function edit(Team $team) {
            $team->delete();
            return redirect()->route('teams.index');
    }

    public function update() {
        $team = Team::find();

    }

    public function destroy(team $team) {
        $team->delete();
        return redirect()->route('teams.index');

    }
}