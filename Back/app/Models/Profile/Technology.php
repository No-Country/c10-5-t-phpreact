<?php

namespace App\Models\Profile;

use App\Models\Image;
use App\Models\Profile\Profile;
use App\Models\Form\FormRegister;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Technology extends Model
{
    use HasFactory;
    
    protected $fillable = ['name'];


    public function formRegister()
    {
        return $this->hasOne(FormRegister::class);
    }

    public function profiles(): BelongsToMany
    {
        return $this->belongsToMany(Profile::class, 'profile_technology');
    }

    public function images(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
