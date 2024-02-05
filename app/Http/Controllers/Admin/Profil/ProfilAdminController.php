<?php

namespace App\Http\Controllers\Admin\Profil;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ProfilAdminController extends Controller
{
    public function updateUserData(Request $request, string $id){
        $data = $request->validate([
            'adresse_utilisateur'=> 'string',
            'telephone_utilisateur' => 'string'
        ]);

        $user = User::findOrFail($id);
        $user->update($data);

        return response()->json(['message' => 'Utilisateur mis à jour avec succès !']);
    }

    public function updatePassword(Request $request, $id)
    {
        $user = User::findOrFail($id);

        if (!Hash::check($request->input('currentPassword'), $user->password)) {
            return response()->json(['message' => 'Mot de passe actuel incorrect'], 400);
        }

        $user->update([
            'password' => Hash::make($request->input('newPassword')),
        ]);

        return response()->json(['message' => 'Mot de passe mis a jour avec succes']);
    }
}
