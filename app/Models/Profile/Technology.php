<?php

namespace App\Models\Profile;

use App\Models\Form\FormRegister;
use App\Models\Profile\Profile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;
    
    protected $fillable = ['name'];

    public function formRegister()
    {
        return $this->hasOne(FormRegister::class);
    }

    public function profiles()
    {
        return $this->belongsToMany(Profile::class, 'profile_technology');
    }
}
