<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retard_Retour_Voiture extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_retour_prevu',
        'date_retour_retard',
        'montant_penalite',
        'status_retard',
        'commentaire',
        
    ];


    public function locations()
{
    return $this->hasMany(Location::class, 'retard_id');
}
}
