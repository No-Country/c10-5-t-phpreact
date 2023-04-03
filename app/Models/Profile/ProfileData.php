<?php

namespace App\Models\Profile;

use App\Models\Form\Country;
use App\Models\Profile\Profile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ProfileData extends Model
{
    use HasFactory;

    
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
}
