<?php

namespace App\Models\Form;

use App\Models\Form\FormRegister;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Horary extends Model
{
    use HasFactory;

    protected $table = 'horary';

    protected $fillable = ['name'];

    public function formRegister(): HasOne
    {
        return $this->hasOne(FormRegister::class);
    }
}
