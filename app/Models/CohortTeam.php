<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CohortTeam extends Model
{
    use HasFactory;

    protected $table = 'cohort_team';

    public function cohort(): BelongsTo
    {
        return $this->belongsTo(Cohort::class);
    }
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
