<?php

namespace App\Models\Profile;

use App\Models\User;
use App\Models\Profile\Project;
use App\Models\Profile\Calification;
use App\Models\Profile\ProfileData;
use App\Models\Profile\Technology;
use App\Models\Profile\SoftSkill;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'profile_project');
    }

    public function calification()
    {
        return $this->belongsTo(Calification::class);
    }

    public function profileData()
    {
        return $this->belongsTo(ProfileData::class);
    }

    public function technologies()
    {
        return $this->belongsToMany(Technology::class, 'profile_technology');
    }

    public function softSkills()
    {
        return $this->belongsToMany(SoftSkill::class, 'profile_soft_skill');
    }
}
