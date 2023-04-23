<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class FormRegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "name" => "required|min:3|string|max:60",
            "lastname" => "required|min:3|string|max:60",
            "email" => "required|email|unique:form_register,email",
            "role_stack_id" => "required|integer",
            "vertical_id" => "required|integer",
            "horary_id" => "required|integer",
            "experience_id" => "required|integer",
            "country_id" => "required|integer",
            "technology_id" => "required|integer"
        ];
    }
}
