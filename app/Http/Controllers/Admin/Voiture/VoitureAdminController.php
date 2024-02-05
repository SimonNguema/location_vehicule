<?php

namespace App\Http\Controllers\Admin\Voiture;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Voiture;

class VoitureAdminController extends Controller
{
    public function index()
    {
        $voiture = Voiture::all();
        return response()->json($voiture);
    }

    public function show($id)
    {
        $voiture = Voiture::findOrFail($id);
        return response()->json($voiture);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'marque_voiture' => 'required',
            'model_voiture' => 'required',
            'annee' => 'required',
            'description' => 'nullable',
            'prix_jour_voiture' => 'required',
            'disponibilite_voiture' => 'required', 
            'image' => 'required',
            
        ]);
        //dd($validatedData);
    
        $voiture = Voiture::create($validatedData);
    
        return response()->json($voiture, 201);
    }

  
   
    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'marque_voiture' => 'required',
            'model_voiture' => 'required',
            'annee' => 'required|integer',
            'description' => 'nullable',
            'prix_jour_voiture' => 'required|decimal',
            'disponibilite_voiture' => 'required|boolean',
            'image' => 'required',
            
        ]);
    
        $voiture = Voiture::findOrFail($id);
        $voiture->update($validatedData);
    
        return response()->json($voiture, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $voiture = Voiture::findOrFail($id);
        $voiture->delete();
    
        return response()->json(null, 204);
    }
}


