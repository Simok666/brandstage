<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ImageResource;

class BrandsSecondSectionResource extends JsonResource
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
            'heading_first_text' => $this->heading_first_text,
            'heading_strong_text' => $this->heading_strong_text,
            'heading_second_text' => $this->heading_second_text,
            'heading_underlined_first_text' => $this->heading_underlined_first_text,
            'heading_third_text' => $this->heading_third_text,
            'heading_underlined_second_text' => $this->heading_underlined_second_text,
            'heading_fourth_text' => $this->heading_fourth_text,
            'description' => $this->description,
            'button_title' => $this->button_title,
            'button_link' => $this->button_link,
            'first_image' => ImageResource::collection($this->getMedia('first_image')),
            'second_image' => ImageResource::collection($this->getMedia('second_image')),
            'third_image' => ImageResource::collection($this->getMedia('third_image')),
            'icon_image_1' => ImageResource::collection($this->getMedia('icon_image_1')),
            'icon_image_2' => ImageResource::collection($this->getMedia('icon_image_2')),
            'icon_image_3' => ImageResource::collection($this->getMedia('icon_image_3')),
            'icon_image_4' => ImageResource::collection($this->getMedia('icon_image_4')),
            'icon_image_5' => ImageResource::collection($this->getMedia('icon_image_5')),
            'icon_image_6' => ImageResource::collection($this->getMedia('icon_image_6')),
            'icon_image_7' => ImageResource::collection($this->getMedia('icon_image_7')),
        ];
    }
}
