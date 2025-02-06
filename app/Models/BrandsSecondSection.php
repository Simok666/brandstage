<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

class BrandsSecondSection extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'heading_first_text',
        'heading_strong_text',
        'heading_second_text',
        'heading_underlined_first_text',
        'heading_third_text',
        'heading_underlined_second_text',
        'heading_fourth_text',
        'description',
        'button_title',
        'button_link',
    ];
}
