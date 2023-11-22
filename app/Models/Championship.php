<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Championship extends Model
{
    use HasFactory;
    protected $fillable = [
        'championship_id',
        'background_image',
        'cover_image',
        'organizer_id',
        'description',
        'type',
        'status',
        'region',
        'featured',
        'subscription_start',
        'subscription_end',
        'checkin_start',
        'checkin_clear',
        'championship_start',
        'slots',
        'current_subscriptions',
        'anticheat_required',
        'rules_id',
        'avatar',
        'substitution_configuration',
        'join_checks',
        'full',
        'checkin_enabled',
        'total_rounds',
        'schedule',
        'total_groups',
        'subscriptions_locked',
        'seeding_strategy',
        'faceit_url',
        'prizes',
        'total_prizes',
        'stream',
        ];
}
