<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    use HasFactory;
    protected $fillable = [
        'player_id',
        'nickname',
        'country',
        'region',
        'faceit_elo',
        'game_skill_level',
        'position',
    ];
}
