<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricePredictions extends Model
{
    use HasFactory;

    protected $fillable = [
        'croptype_id','region','forecast_month','predicted_price',
        'confidence_level'

    ];

    public function croptype()
    {
        return $this->belongsTo(CropType::class);
    }
}
