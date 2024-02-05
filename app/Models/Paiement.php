<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;

    protected $fillable = [
        'montant_paiement',
        'methode_paiement',
        'date_paiement',
      
    ];

    public function locations()
    {
        return $this->hasMany(Location::class, 'paiement_id');
    }
}
