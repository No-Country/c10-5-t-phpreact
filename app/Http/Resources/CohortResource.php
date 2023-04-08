<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class CohortResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'type' => 'cohort',
            'id' => $this->id,
            'attributes' => [
                'name' => $this->name,
                'active' => $this->active,
                'created_at' => Carbon::parse($this->created_at)->format('d/m/Y'),
            ],
            'links' => [
                'self' => route('cohorts.show', $this->id)
            ]
        ];
    }
}
