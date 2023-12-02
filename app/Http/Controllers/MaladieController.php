<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maladie;
use Illuminate\Support\Facades\Storage;


class MaladieController extends Controller
{
    public function index()
    {
        $maladies = Maladie::paginate(3);
        return view('admin.maladies.index', compact('maladies'));

    }

    public function create()
    {
        return view('admin.maladies.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|max:255',
            'symptomes' => 'required',
            'traitement' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:14000',
        ]);


        $maladie = new Maladie();
        $maladie->nom = $validatedData['nom'];
        $maladie->symptomes = $validatedData['symptomes'];
        $maladie->traitement = $validatedData['traitement'];

        $imagePath = $request->file('image')->store('uploads', 'public');
        $maladie->image = $imagePath;
        $maladie->save();

        return redirect()->route('admin.maladies.index')->with('success', 'La maladie a été ajoutée avec succès');
    }

    public function edit($id)
    {
        $maladie = Maladie::findOrFail($id);
        return view('admin.maladies.edit', compact('maladie'));
    }

    public function update(Request $request, $id)
    {
        $maladie = Maladie::findOrFail($id);

        $validatedData = $request->validate([
            'nom' => 'required|max:255',
            'symptomes' => 'required',
            'traitement' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:14000',
        ]);


        if ($request->hasFile('image')) {

            if ($maladie->image) {
                Storage::disk('public')->delete($maladie->image);
            }


            $imagePath = $request->file('image')->store('uploads', 'public');
            $maladie->image = $imagePath;
        }


        $maladie->nom = $validatedData['nom'];
        $maladie->symptomes = $validatedData['symptomes'];
        $maladie->traitement = $validatedData['traitement'];

        $maladie->save();

        return redirect()->route('admin.maladies.index')->with('success', 'La maladie a été mise à jour avec succès');
    }

    public function destroy($id)
    {
        $maladie = Maladie::find($id);

        if (!$maladie) {
            return redirect()->route('admin.maladies.index')->with('error', 'La maladie n\'a pas été trouvée');
        }

        if ($maladie->delete()) {
            return redirect()->route('admin.maladies.index')->with('success', 'La maladie a été supprimée avec succès');
        } else {
            return back()->with('error', 'La suppression de la maladie a échoué');
        }
    }


    public function indexUtilisateur()
{
    $maladies = Maladie::latest()->paginate(3);

    return view('utilisateurs.maladies.index', compact('maladies'));
}

}


