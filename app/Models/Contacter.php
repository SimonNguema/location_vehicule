<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacter extends Model
{
    use HasFactory;

    protected $fillable = [
        'sujet_message',
        'contenu_message',
        'date_envoi_message',
        'user_id',
       
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
