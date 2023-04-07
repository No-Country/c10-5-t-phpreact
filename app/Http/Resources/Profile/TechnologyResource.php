<?php

namespace App\Http\Resources\Profile;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class TechnologyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'type' => 'technology',
            'id' => $this->id,
            'attributes' => [
                'name' => $this->name,
                'image' => $this->images->url,
                'created_at' => Carbon::parse($this->created_at)->format('d/m/Y'),
            ]
        ];
    }
}
