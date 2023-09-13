<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TournamentMatches extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function homeTeam()
    {
        return $this->belongsTo(Team::class, 'hometeam_id');
    }

    public function guestTeam()
    {
        return $this->belongsTo(Team::class, 'guestteam_id');
    }
}
