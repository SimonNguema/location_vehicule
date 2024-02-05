<?php

namespace App\Http\Controllers\Utilisateurs\Voiture;

use App\Models\Voiture;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VoitureController extends Controller
{
    public function index(){}

    public function detailsVoiture($id)
    {
        $voiture = Voiture::findOrFail($id);
        return response()->json($voiture);
    }


    public function voitureLocation($id)
    {
        try {
            // Recherchez la voiture par ID
            $voiture = Voiture::findOrFail($id);

            // Retournez une réponse JSON avec les détails de la voiture
            return response()->json(['success' => true, 'voiture' => $voiture], 200);
        } catch (\Exception $e) {
            // Gérez les erreurs, par exemple si la voiture n'est pas trouvée
            return response()->json(['success' => false, 'message' => $e->getMessage()], 404);
        }
    }
}
