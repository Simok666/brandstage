<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HomeHeroHeadingDescriptionResource extends JsonResource
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
            'heading_first' => $this->heading_first,
            'heading_middle' => $this->heading_middle,
            'heading_third' => $this->heading_third,
            'description' => $this->description,
            'button_title' => $this->button_title,
            'button_link' => $this->button_link,
        ];
    }
}
