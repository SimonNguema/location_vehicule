<?php

namespace App\Http\Controllers\Utilisateurs\Voiture;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VoiturePageController extends Controller
{
    public function index(){
        return view('utilisateurs.voiture.index');
    }

    public function detailsVoiture($id){
        return view('utilisateurs.voiture.detailsVoiture', compact('id'));
    }
    public function voitureLocation($id){
        return view('utilisateurs.reservation.index', compact('id'));

    }
}
