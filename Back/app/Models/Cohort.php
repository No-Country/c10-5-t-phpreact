<?php

namespace App\Models;

use App\Models\Team;
use App\Models\User;
use App\Models\Profile\Profile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Cohort extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function profiles(): BelongsToMany
    {
        return $this->belongsToMany(Profile::class, 'cohort_profile');
    }

    public function teams(): HasMany
    {
        return $this->hasMany(Team::class);
    }

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
