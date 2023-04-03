<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Form\FormRegister;

class Vertical extends Model
{
    use HasFactory;

    public function formRegister()
    {
        return $this->hasOne(FormRegister::class);
    }
}
