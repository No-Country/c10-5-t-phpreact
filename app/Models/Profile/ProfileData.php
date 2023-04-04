<?php

namespace App\Models\Profile;

use App\Models\Form\Country;
use App\Models\Profile\Profile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProfileData extends Model
{
    use HasFactory;

    protected $table = 'profile_data';

    protected $fillable = [
        'specialty',
        'url',
        'linkedin',
        'github',
        'education',
        'country_id'
    ];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }
}
