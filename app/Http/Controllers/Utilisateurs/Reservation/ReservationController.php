<?php

namespace App\Http\Controllers\Utilisateurs\Reservation;

use App\Models\User;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReservationController extends Controller
{
    public function index(){
        
    }
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'date_debut_location' => 'required',
            'date_fin_location' => 'required',
            'montant_total_location' => 'required',
            'date_reserve_location' => 'required',
            'status_location' => 'required',
            'user_id'=>'required|exists:users,id',
            'voiture_id'=>'required',
            'paiement_id',
            'retard_id',
            
        ]);

        //dd($validatedData);

        $validatedData['user_id'] =$request->input('user_id'); // Associe l'ID de l'utilisateur à l'emprunt
        $validatedData['voiture_id'] = $request->input('voiture_id');

        //dd($validatedData);
        $location = Location::create($validatedData);

        return response()->json(['message' => 'Location créé avec succès', 'location' => $location], 201);
    }

}
