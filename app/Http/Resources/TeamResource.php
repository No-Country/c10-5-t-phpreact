<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Resources\Profile\ProfileResource;
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
                'cohort' => $this->cohorts,
                'profiles' => ProfileResource::collection($this->whenLoaded('profiles')),
                'created_at' => Carbon::parse($this->created_at)->format('d/m/Y'),
            ],
            'links' => [
                'self' => route('teams.show', $this->resource)
            ]
        ];
    }
}
