<?php

namespace App\Http\Controllers\Team;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Team;


class UpdateController extends Controller
{

    public function __invoke() {
        $team = Team::find();

    }

}