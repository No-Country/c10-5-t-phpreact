<?php

namespace App\Http\Resources\Profile;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

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
                'user_id' => $this->user_id,
                'specialty' => $this->specialty,
                'url' => $this->url,
                'linkedin' => $this->linkedin,
                'github' => $this->github,
                'education' => $this->education,
                'country' => $this->country->name,
                'vertical' => $this->vertical->name,
                'horary' => $this->horary->name,
                'led_teams_quantity' => $this->led_teams_quantity,
                'simulations_quantity' => $this->simulations_quantity,
                'created_at' => Carbon::parse($this->created_at)->format('d/m/Y')
            ],
            'links' => [
                'self' => url('userAll')
            ]
        ];
    }
}
