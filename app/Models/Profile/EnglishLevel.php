<?php

namespace App\Models\Profile;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnglishLevel extends Model
{
    use HasFactory;

    protected $table = 'english_levels';
    
    protected $fillable = ['level'];
}
