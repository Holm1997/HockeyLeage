<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    protected function teams()
    {
        return $this->belongsToMany(Team::class, 'tournament_teams', 'tournament_id', 'team_id');
    }
}
