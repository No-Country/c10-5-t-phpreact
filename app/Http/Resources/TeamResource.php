<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class TeamResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'type' => 'team',
            'id' => $this->id,
            'attributes' => [
                'name' => $this->name,
                'active' => $this->active,
                'cohort_id' => $this->cohort_id,
                'created_at' => Carbon::parse($this->created_at)->format('d/m/Y'),
            ],
            'links' => [
                'self' => route('teams.show', $this->resource)
            ]
        ];
    }
}
