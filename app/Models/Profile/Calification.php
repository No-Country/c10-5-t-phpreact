<?php

namespace App\Models\Profile;

use App\Models\User;
use App\Models\Profile\Profile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Calification extends Model
{
    use HasFactory;

    protected $fillable = [
        'calified_profile_id',
        'califying_profile_id',
        'calification'
    ];

    public function profile(): BelongsTo
    {
        return $this->belongsTo(Profile::class, 'profile_id');
    }

    public function califyingProfile(): BelongsTo
    {
        return $this->belongsTo(Profile::class, 'califiying_profile_id');
    }
}
