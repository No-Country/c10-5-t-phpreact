<?php

namespace App\Models\Form;

use App\Models\Form\Horary;
use App\Models\Form\Country;
use App\Models\Form\Vertical;
use App\Models\Form\RoleStack;
use App\Models\Form\Experience;
use App\Models\Profile\Technology;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormRegister extends Model
{
    use HasFactory;

    protected $table = 'form_register';

    protected $guarded = [];

    public function horary(): BelongsTo
    {
        return $this->belongsTo(Horary::class, 'horary_id');
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function roleStack(): BelongsTo
    {
        return $this->belongsTo(RoleStack::class, 'role_stack_id');
    }

    public function vertical(): BelongsTo
    {
        return $this->belongsTo(Vertical::class, 'vertical_id');
    }

    public function technology(): BelongsTo
    {
        return $this->belongsTo(Technology::class, 'technology_id');
    }

    public function experience(): BelongsTo
    {
        return $this->belongsTo(Experience::class, 'experience_id');
    }
}
