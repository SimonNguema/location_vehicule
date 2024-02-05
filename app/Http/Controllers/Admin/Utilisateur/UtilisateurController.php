<?php

namespace App\Http\Controllers\Admin\Utilisateur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UtilisateurController extends Controller
{
    public function index(){
        $user = User::all();
        return response()->json($user);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nom_utilisateur' => 'required',
            'prenom_utilisateur' => 'required',
            'adresse_utilisateur' => 'required',
            'email_utilisateur' => 'required|email|unique:users',
            'telephone_utilisateur' => 'required',
            'role_utilisateur' => 'required',
            'password' => 'required|min:8',
            'admin_id' => 'exists:administrateurs,id',
        ]);

        $user = User::create($validatedData);

        return response()->json(['message' => 'Utilisateur créé avec succès', 'user' => $user], 201);
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    
        return response()->json(null, 204);
    }

    
}
