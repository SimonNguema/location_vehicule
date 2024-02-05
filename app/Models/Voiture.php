<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;

    protected $fillable = [
        'marque_voiture',
        'model_voiture',
        'annee',
        'description',
        'prix_jour_voiture',
        'disponibilite_voiture',
        'image',
        
    ];

    public function locations()
    {
        return $this->hasMany(Location::class, 'voiture_id');
    }
}
