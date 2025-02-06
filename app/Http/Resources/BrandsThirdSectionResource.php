<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ImageResource;

class BrandsThirdSectionResource extends JsonResource
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
            'heading' => $this->heading,
            'vertical_text' => $this->vertical_text,
            'description' => $this->description,
            'icon_image_1' => ImageResource::collection($this->getMedia('icon_image_1')),
            'icon_image_2' => ImageResource::collection($this->getMedia('icon_image_2')),
            'icon_image_3' => ImageResource::collection($this->getMedia('icon_image_3')),
            'icon_image_4' => ImageResource::collection($this->getMedia('icon_image_4')),
            'icon_image_5' => ImageResource::collection($this->getMedia('icon_image_5')),
            'icon_image_6' => ImageResource::collection($this->getMedia('icon_image_6')),
            'icon_image_7' => ImageResource::collection($this->getMedia('icon_image_7')),
            'icon_image_8' => ImageResource::collection($this->getMedia('icon_image_8')),
            'phone_video' => ImageResource::collection($this->getMedia('phone_video')),
            'phone_image' => ImageResource::collection($this->getMedia('phone_image'))
        ];
    }
}
