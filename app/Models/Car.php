<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'year',
        'brand',
        'image',
        'small_images',
        'small_description',
        'description'
    ];
    protected $casts = [
        'small_images' => 'array'
    ];
}
