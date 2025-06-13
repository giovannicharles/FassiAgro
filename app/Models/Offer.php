<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_offer';
    protected $fillable = [
        'producteur_id',
        'croptype_id',
        'quantity',
        'unit_price',
        'available_from',
        'available_until',
        'region'
    ];
    public function producteur()
    {
        return $this->belongsTo(User::class,'producteur_id');
    }
    public function croptype()
    {
        return $this->belongsTo(CropType::class);
    }
}
