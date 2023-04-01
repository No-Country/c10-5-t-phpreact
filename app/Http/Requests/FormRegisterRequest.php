<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class FormRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            "full_name" => "required|min:3|max:60",
            "email" => "required|email|unique:users,email",
            "role_stack_id" => "required",
            "vertical_id" => "required",
            "horary_id" => "required",
            "experience_id" => "required",
            "country_id" => "required",
            "technology_id" => "required",
        ];
    }
}
