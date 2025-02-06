<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NavbarSectionResource extends JsonResource
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
            'signin_title' => $this->signin_title,
            'signin_link' => $this->signin_link,
            'logo_image' => ImageResource::collection($this->getMedia('logo_image')),
        ];
    }
}
