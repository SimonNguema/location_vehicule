<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrateur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_admin',
        'prenom_admin',
        'email_utilisateur',
        'telephone_admin',
        'niveau_acces',
        'password_admin',
      
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'admin_id');
    }
}
