<?php

namespace App\Models;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TeamAttendance extends Model
{
    use HasFactory;

    protected $table = 'team_attendances';

    protected $fillable = [
        'week',
        'date',
        'attended',
        'justification',
        'user_id',
        'team_id'
    ];
    
    const week_values = ['1', '2', '3', '4'];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
