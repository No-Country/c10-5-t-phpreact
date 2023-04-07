<?php

namespace App\Models;

use App\Models\Team;
use App\Models\User;
use App\Models\UserControl;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WeekResults extends Model
{
    use HasFactory;

    protected $fillable = [
        'weeks',
        'observations',
        'tasks',
        'communication',
        'description',
        'initiave',
        'organization',
        'collaboration',
        'proactivy'
    ];

    public function teams(): BelongsToMany
    {
        return $this->belongsToMany(Team::class, 'team_week');
    }

    public function userControls(): HasMany
    {
        return $this->hasMany(UserControl::class);
    }
}
