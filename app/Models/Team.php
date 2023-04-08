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

    public function cohorts(): BelongsTo
    {
        return $this->belongsTo(Cohort::class, 'cohort_id');
    }

    public function weekResults() : BelongsToMany
    {
        return $this->belongsToMany(WeekResults::class, 'team_week');
    }
}
