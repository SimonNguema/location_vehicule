<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_debut_location',
        'date_fin_location',
        'montant_total_location',
        'date_reserve_location',
        'status_location',
        'user_id',
        'voiture_id',
        'paiement_id',
        'retard_id',

    ];

    // Relation vers l'utilisateur
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relation vers la voiture
    public function voiture()
    {
        return $this->belongsTo(Voiture::class, 'voiture_id');
    }

    // Relation vers le paiement
    public function paiement()
    {
        return $this->belongsTo(Paiement::class, 'paiement_id');
    }

    // Relation vers le retard de retour de voiture
    public function retard()
    {
        return $this->belongsTo(Retard_Retour_Voiture::class, 'retard_id');
    }
}
