<?php

namespace App\Models\Profile;

use App\Models\User;
use App\Models\Image;
use App\Models\Profile\Project;
use App\Models\Profile\SoftSkill;
use App\Models\Profile\Technology;
use App\Models\Profile\ProfileData;
use App\Models\Profile\Calification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'led_teams_quantity',
        'simulations_quantity',
        'user_id',
        'profile_data_id',
        'calification_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class, 'profile_project');
    }

    public function califications(): HasMany
    {
        return $this->hasMany(Calification::class, 'profile_id');
    }

    public function profileData(): BelongsTo
    {
        return $this->belongsTo(ProfileData::class);
    }

    public function technologies(): BelongsToMany
    {
        return $this->belongsToMany(Technology::class, 'profile_technology');
    }

    public function softSkills(): BelongsToMany
    {
        return $this->belongsToMany(SoftSkill::class, 'profile_soft_skill');
    }

    public function images(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
