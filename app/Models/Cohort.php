<?php

namespace App\Models;

use App\Models\User;
use App\Models\Team;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Cohort extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'cohort_user');
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'cohort_team');
    }

}
