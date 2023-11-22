<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;
    protected $fillable = [
        'tournament_id',
        'name',
        'featured_image',
        'game_id',
        'region',
        'status',
        'custom',
        'invite_type',
        'prize_type',
        'total_prize',
        'team_size',
        'min_skill',
        'max_skill',
        'match_type',
        'organizer_id',
        'whitelist_countries',
        'membership_type',
        'number_of_players',
        'number_of_players_joined',
        'number_of_players_checkedin',
        'number_of_players_participants',
        'anticheat_required',
        'started_at',
        'subscriptions_count',
        'faceit_url',
    ];
}
