<?php

namespace App\Models\Form;

use App\Models\Form\FormRegister;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function formRegister()
    {
        return $this->hasOne(FormRegister::class);
    }
}
