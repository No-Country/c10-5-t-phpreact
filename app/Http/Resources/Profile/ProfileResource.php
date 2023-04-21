<?php

namespace App\Http\Resources\Profile;

use Illuminate\Support\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Profile\TechnologyResource;
use App\Http\Resources\TeamResource;

class ProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'type' => 'profile',
            'id' => $this->id,
            'attributes' => [
                'user' => $this->users,
                'role' => $this->roles->first()->name,
                'specialty' => $this->specialty,
                'url' => $this->url,
                'linkedin' => $this->linkedin,
                'github' => $this->github,
                'education' => $this->education,
                'country' => $this->country->name,
                'vertical' => $this->vertical->name,
                'horary' => $this->horary->name,
                'roleStack' => $this->roleStack->name,
                'englishLevel' => $this->englishLevel->level,
                'led_teams_quantity' => $this->led_teams_quantity,
                'simulations_quantity' => $this->simulations_quantity,
                'technologies' => TechnologyResource::collection($this->technologies),
                'created_at' => Carbon::parse($this->created_at)->format('d/m/Y')
            ],
            'relationships' => [
                'teams' => [
                    'data' => TeamResource::collection($this->teams)
                ]
            ],
            'links' => [
                'self' => url('profile/'.$this->id)
            ]
        ];
    }
}
