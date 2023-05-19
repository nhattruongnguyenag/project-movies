<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EpisodeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'move_id' => $this->move_id,
            'link' => $this->link,
            'episode' => $this->episode,
            'trailer' => $this->trailer,
            'type' => $this->type,
            'movie' => $this->movie()->first()
        ];
    }
}
