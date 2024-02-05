<?php

namespace App\Http\Controllers\Utilisateurs\Contacter;

use App\Models\Contacter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ContacterController extends Controller
{
    public function index(){
        
    }

    public function envoyerMessage(Request $request){

        $validatedData = $request->validate([
			'sujet_message' => 'required|string|max:255',
			'contenu_message' => 'required|string|max:255',
			
            'user_id' => 'exists:users,id',
			
		]);
        //dd($request->user_id);
        
        
           // $user = Auth::user();
           
            //$validatedData['user_id'] = $user;
            $validatedData['date_envoi_message'] = now();
    
            // Create the message
            $contacter = Contacter::create($validatedData);
    
            // Return a response
            return response()->json(['message' => 'Message envoyé avec succès', 'contacter' => $contacter], 201);
      

    }
}
