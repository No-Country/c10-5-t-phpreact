<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class FormsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'type' => 'forms',
            'id' => $this->id,
            'attributes' => [
                "name" => $this->name,
                "lastname" => $this->lastname,
                "email" => $this->email,
                "role_stack_id" => $this->roleStack->name,
                "horary_id" => $this->horary->name,
                "experience_id" => $this->country->name,
                "vertical_id" => $this->vertical->name,
                "technology_id" => $this->experience->name,
                'created_at' => Carbon::parse($this->created_at)->format('d/m/Y'),
            ],
            'links' => [
                'self' => route('formsOnly', $this->id)
            ]
        ];
    }
} 
