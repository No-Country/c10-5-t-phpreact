<?php

namespace App\Models\Profile;

use App\Models\Team;
use App\Models\User;
use App\Models\Cohort;
use App\Models\Form\Horary;
use App\Models\Form\Country;
use App\Models\Form\Vertical;
use App\Models\Form\RoleStack;
use App\Models\Profile\Project;
use App\Models\Profile\SoftSkill;
use App\Models\Profile\Technology;
use App\Models\Profile\Calification;
use App\Models\Profile\EnglishLevel;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Profile extends Model
{
    use HasFactory, HasRoles;

    protected $table = 'profiles';

    protected $guard_name = 'web';


    protected $guarded = [];

    public function teamProfiles(): HasManyThrough
    {
        return $this->hasManyThrough(
            Profile::class, // Modelo de destino
            Team::class, // Modelo intermedio
            'id', // Clave foránea en el modelo de origen
            'team_id', // Clave foránea en el modelo intermedio
            'id', // Clave primaria en el modelo de destino
            'profile_id' // Clave primaria en el modelo intermedio
        );
    }
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function cohorts(): BelongsToMany
    {
        return $this->belongsToMany(Cohort::class, 'cohort_profile');
    }
    public function roleStack(): BelongsTo
    {
        return $this->BelongsTo(RoleStack::class, 'role_stack_id');
    }
    public function englishLevel(): BelongsTo
    {
        return $this->BelongsTo(EnglishLevel::class, 'english_level_id');
    }

    public function teams(): BelongsToMany
    {
        return $this->belongsToMany(Team::class, 'team_profile');
    }

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
