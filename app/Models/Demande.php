<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;

    protected $fillable = [
        'acheteur_id','croptype_id','quantity','preferred_delivery_date','status',
        'region'

    ];

    public function acheteur()
    {
        return $this->belongsTo(User::class, 'acheteur_id', 'id_user');
    }

    public function croptype()
{
    return $this->belongsTo(CropType::class, 'croptype_id');
}

}
