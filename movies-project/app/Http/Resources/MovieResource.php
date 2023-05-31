<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MovieResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'abc' => $this->name,
            'name' => $this->name,
            'status' => $this->status,
            'director' => $this->director,
            'actor' => $this->actor,
            'country' => $this->country,
            'genreses' => $this->genreses()->get(),
            'category' => $this->category() != null ? $this->category()->first():"none",
            'publish_year' => $this->publish_year,
            'duration' => $this->duration,
            'description' => $this->description,
            'image' => $this->image,
            'view_count' => $this->view_count,
            'episodes' => $this->episodes()
        ];
    }
}
