<?php

namespace App\Http\Controllers\Utilisateurs\AuthUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthUserController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only('email_utilisateur', 'password');
        $url='';

        if(Auth::attempt($credentials)){
            $user = Auth::User();
            if($user->role_utilisateur=="Client"){
                $url='/home';
            }else{
                $url ='/dashboard';
            }
        }else{
            return redirect('/login')->with('erreur','Mot de passe ou email incorrect');
        }

        return array(
            'auth' => Auth::user()->toJson,
            'url' =>$url,
        );
    }

    public function register(Request $request){

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

        return response()->json(['message' => 'Utilisateur enregistré avec succès']);
    }

    public function logout(){
        Auth::logout();
        return response()->json(['message' => 'Vous etes maintemant deconnecte ']);
    }
}
