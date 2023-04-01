<?php

namespace App\Models\Form;

use App\Models\Form\Horary;
use App\Models\Form\Country;
use App\Models\Form\Vertical;
use App\Models\Form\RoleStack;
use App\Models\Form\Experience;
use App\Models\Profile\Technology;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormRegister extends Model
{
    use HasFactory; 

    protected $fillable = ['full_name', 'email'];
    
    public function horary()
    {
        return $this->belongsTo(Horary::class);
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function roleStack()
    {
        return $this->belongsTo(RoleStack::class);
    }
    public function vertical()
    {
        return $this->belongsTo(Vertical::class);
    }
    public function technology()
    {
        return $this->belongsTo(Technology::class);
    }
    public function experience()
    {
        return $this->belongsTo(Experience::class);
    }
}
