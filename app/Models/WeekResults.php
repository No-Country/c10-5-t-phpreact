<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;
use App\Models\User;

class WeekResults extends Model
{
    use HasFactory;

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'team_week');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_control');
    }
}
