<?php

namespace App\Models\Profile;

use App\Models\Profile\Profile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EnglishLevel extends Model
{
    use HasFactory;

    protected $table = 'english_levels';
    
    protected $fillable = ['level'];

    
    public function profiles()
    {
        return $this->hasMany(Profile::class);
    }
}
