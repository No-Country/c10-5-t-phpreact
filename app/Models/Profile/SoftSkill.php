<?php

namespace App\Models\Profile;

use App\Models\Profile\Profile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftSkill extends Model
{
    use HasFactory;

    public function profiles()
    {
        return $this->belongsToMany(Profile::class, 'profile_soft_skill');
    }

    
}
