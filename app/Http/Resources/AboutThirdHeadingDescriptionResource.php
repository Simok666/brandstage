<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AboutThirdHeadingDescriptionResource extends JsonResource
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
            'description' => $this->description,
            'heading_box_1' => $this->heading_box_1,
            'description_box_1' => $this->description_box_1,
            'heading_box_2' => $this->heading_box_2,
            'description_box_2' => $this->description_box_2,
            'heading_box_3' => $this->heading_box_3,
            'description_box_3' => $this->description_box_3,
            'heading_box_4' => $this->heading_box_4,
            'description_box_4' => $this->description_box_4
        ];
    }
}
