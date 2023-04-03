<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cohort;
use App\Models\WeekResults;

class Team extends Model
{
    use HasFactory;

    public function cohorts()
    {
        return $this->belongsToMany(Cohort::class, 'cohort_team');
    }

    public function weekResults()
    {
        return $this->belongsToMany(WeekResults::class, 'team_week');
    }
}
