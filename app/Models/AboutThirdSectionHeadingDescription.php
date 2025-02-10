<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutThirdSectionHeadingDescription extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'heading',
        'description',
        'heading_box_1',
        'description_box_1',
        'heading_box_2',
        'description_box_2',
        'heading_box_3',
        'description_box_3',
        'heading_box_4',
        'description_box_4'
    ];
}
