<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    use HasFactory;

    protected $fillable = [
        'offer_id',
        'demande_id',
        'match_score',
        'is_accepted'
    ];
 public function offer()
    {
        return $this->belongsTo(Offer::class);
    }

    public function demande()
    {
        return $this->belongsTo(Demande::class);
    }
}
