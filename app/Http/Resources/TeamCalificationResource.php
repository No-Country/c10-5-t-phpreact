<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class TeamCalificationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'type' => 'team_ratings',
            'id' => $this->id,
            'attributes' => [
                'name' => $this->name,
                'week' => $this->week,
                'date' => $this->date,
                'compromise' => $this->compromise,
                'communication' => $this->communication,
                'initiative' => $this->initiative,
                'proactivity' => $this->proactivity,
                'organization' => $this->organization,
                'collaboration' => $this->collaboration,
                'feedback' => $this->feedback,
                'sprint_rating' => $this->sprint_rating,
                'user_id' => $this->user_id,
                'team_id' => $this->team_id,
                'created_at' => Carbon::parse($this->created_at)->format('d/m/Y'),
            ],
            'links' => [
                'self' => route('editTeamCalification', $this->resource)
            ]
        ];
    }
}
