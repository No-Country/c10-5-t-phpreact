<?php

namespace App\Models;


use App\Models\User;
use App\Models\Cohort;
use App\Models\TeamRating;
use App\Models\TeamAttendance;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'active', 'cohort_id'];

    public function cohort(): BelongsTo
    {
        return $this->belongsTo(Cohort::class)->withDefault();
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function attendances(): HasMany
    {
        return $this->hasMany(TeamAttendance::class);
    }

    public function teamRatings(): HasMany
    {
        return $this->hasMany(TeamRating::class);
    }
}
