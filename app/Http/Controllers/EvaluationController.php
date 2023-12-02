<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function showForm()
    {
        return view('utilisateurs.evaluation');
    }

    public function evaluer(Request $request)
    {
        $poids = $request->input('poids');
        $taille = $request->input('taille');

        // Appelez votre fonction de calcul de risque ici en fonction des données reçues

        // Exemple de calcul de l'IMC
        $imc = $this->calculerIMC($poids, $taille);

        // En fonction du calcul, vous pouvez retourner une vue avec les résultats
        return view('utilisateurs.resultat', compact('imc'));
    }

    private function calculerIMC($poids, $taille)
    {
        $taille = $taille / 100; // Convertir la taille en mètres
        return $poids / ($taille * $taille); // Calculer l'IMC
    }
}
