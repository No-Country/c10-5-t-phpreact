<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    
    public function rules(): array
    {
        return [
            "name" => ["required", "min:3",  Rule::unique('teams')->ignore($this->team->id ?? null)],
            "active" => "required",
        ];
    }
}
