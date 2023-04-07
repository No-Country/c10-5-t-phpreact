<?php

namespace App\Models\Profile;

use App\Models\Profile\Profile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SoftSkill extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function profiles(): BelongsToMany
    {
        return $this->belongsToMany(Profile::class, 'profile_soft_skill');
    }
}
