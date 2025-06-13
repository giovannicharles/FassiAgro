<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CropGuide extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'unit'
    ];
}
