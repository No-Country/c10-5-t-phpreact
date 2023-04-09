<?php

namespace App\Models;

use App\Models\Team;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TeamRating extends Model
{
    use HasFactory;

    protected $table = 'team_ratings';

    protected $fillable = [
        'week',
        'date',
        'compromise',
        'communication',
        'initiative',
        'proactivity',
        'organization',
        'aspect_6',
        'collaboration',
        'sprint_rating',
        'user_id',
        'team_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
