<?php

namespace App\Models\Form;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Form\FormRegister;
use App\Models\Profile\ProfileData;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function formRegister()
    {
        return $this->hasOne(FormRegister::class);
    }

    public function profileData()
    {
        return $this->hasOne(ProfileData::class);
    }   
}
