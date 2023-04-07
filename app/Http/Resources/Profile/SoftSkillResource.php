<?php

namespace App\Http\Resources\Profile;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class SoftSkillResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'type' => 'soft skill',
            'id' => $this->id,
            'attributes' => [
                'name' => $this->name,
                'created_at' => Carbon::parse($this->created_at)->format('d/m/Y'),
            ]
        ];
    }
}
