<?php

namespace App\Models;


use App\Models\Cohort;
use App\Models\TeamRating;
use App\Models\TeamAttendance;
use App\Models\Profile\Profile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'active', 'cohort_id'];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function cohorts(): BelongsTo
    {
        return $this->belongsTo(Cohort::class, 'cohort_id')->withDefault();
    }

    public function profiles(): BelongsToMany
    {
        return $this->belongsToMany(Profile::class, 'team_profile');
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
