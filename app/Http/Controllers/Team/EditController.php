<?php

namespace App\Http\Controllers\Team;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Team;


class EditController extends Controller
{

    public function __invoke(Team $team) {
            $team->delete();
            return redirect()->route('teams.index');
    }

}