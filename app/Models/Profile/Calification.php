<?php

namespace App\Models\Profile;

use App\Models\user;
use App\Models\Profile\ProfileData;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Calification extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function profileData()
    {
        return $this->belongsToMany(ProfileData::class, 'profile');
    }
}
