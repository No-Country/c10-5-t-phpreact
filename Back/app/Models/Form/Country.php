<?php

namespace App\Models\Form;

use App\Models\Form\FormRegister;
use App\Models\Profile\ProfileData;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function formRegister(): HasMany
    {
        return $this->hasMany(FormRegister::class);
    }

    public function profileData(): HasMany
    {
        return $this->hasMany(ProfileData::class);
    }
}
