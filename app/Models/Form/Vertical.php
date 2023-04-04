<?php

namespace App\Models\Form;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Form\FormRegister;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Vertical extends Model
{
    use HasFactory;

    protected $table = 'vertical';

    protected $fillable = ['name'];

    public function formRegister(): HasOne
    {
        return $this->hasOne(FormRegister::class);
    }
}
