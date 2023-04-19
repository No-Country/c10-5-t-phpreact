<?php

namespace App\Models\Profile;

use App\Models\Form\Horary;
use App\Models\Form\Country;
use App\Models\Form\Vertical;
use App\Models\Profile\Project;
use App\Models\Profile\SoftSkill;
use App\Models\Profile\Technology;
use App\Models\Profile\Calification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';

    protected $guarded = [];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
    public function horary(): BelongsTo
    {
        return $this->belongsTo(Horary::class, 'horary_id');
    }
    public function vertical(): BelongsTo
    {
        return $this->belongsTo(Vertical::class, 'vertical_id');
    }
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
