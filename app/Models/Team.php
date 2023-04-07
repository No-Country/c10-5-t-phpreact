<?php

namespace App\Models;


use App\Models\WeekResults;
use App\Models\Cohort;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'active'];

    public function cohorts(): BelongsToMany
    {
        return $this->belongsToMany(Cohort::class, 'cohort_team');
    }

    public function weekResults()
    {
        return $this->belongsToMany(WeekResults::class, 'team_week');
    }
}
