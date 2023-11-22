<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'abbreviated_name',
        'team_logo',
        'created_by',
        'created_at',
        'updated_at'
    ];
}
