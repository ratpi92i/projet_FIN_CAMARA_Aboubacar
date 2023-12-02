<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;


class UtilisateurController extends Controller
{
    public function index()
    {
        $utilisateurs = Utilisateur::paginate(3);

        return view('utilisateurs.index', compact('utilisateurs'));
    }

    public function destroy(Utilisateur $utilisateur)
    {
        $utilisateur->delete();
        return redirect()->route('utilisateurs')
            ->with('success', 'Utilisateur supprimé avec succès');
    }
}
