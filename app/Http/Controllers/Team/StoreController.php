<?php

namespace App\Http\Controllers\Team;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Team;


class StoreController extends Controller
{

    public function __invoke() {
        $data = request()->validate([
            'title' => 'string',
            'team_year' => 'string',
        ]);

        Team::create($data);
        return redirect()->route('teams.index');
    }

}