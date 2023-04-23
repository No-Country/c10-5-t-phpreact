<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class postTeamCalificationRequest extends FormRequest
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
            "week" => "required|integer",
            "date" => "date|required",
            "compromise" => "integer",
            "communication" => "integer",
            "initiative" => "integer",
            "proactivity" => "integer",
            "organization" => "integer",
            "collaboration" => "integer",
            "attended" => "integer|required",
            "justification" => "integer",
            "feedback" => "string",
            "sprint_rating" => "required|integer",
            "user_id" => "required|integer",
            "team_id" => "required|integer",
        ];
    }
}
