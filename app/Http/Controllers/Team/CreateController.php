<?php

namespace App\Http\Controllers\Team;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Team;


class CreateController extends Controller
{

    public function __invoke() {
        
        return view('team/create');

    }
}