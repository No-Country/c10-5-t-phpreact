<?php

namespace App\Models\Form;

use App\Models\form\Horary;
use App\Models\form\Country;
use App\Models\form\Vertical;
use App\Models\form\RoleStack;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormRegister extends Model
{
    use HasFactory;
    
    public function horary()
    {
        return $this->belongsTo(Horary::class);
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function rolestack()
    {
        return $this->belongsTo(RoleStack::class);
    }
    public function vertical()
    {
        return $this->belongsTo(Vertical::class);
    }
}
