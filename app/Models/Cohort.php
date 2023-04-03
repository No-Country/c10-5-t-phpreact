<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Team;


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
