<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'email',
        'role',
        'team_id',
        'created_at',
        'updated_at'
    ];
}
