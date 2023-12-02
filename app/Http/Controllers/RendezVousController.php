<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RendezVous;
use App\Models\Hospital;
use App\Models\Utilisateur;

class RendezVousController extends Controller
{



    public function index()
    {

        $rendezvous = RendezVous::with('utilisateur', 'hospital')->get();

        return view('admin.rdv.index', compact('rendezvous'));

    }




    public function create()
    {
        $hospitals = Hospital::all();
        return view('rendezvous.create', compact('hospitals'));
    }

    public function store(Request $request)
    {
        if(auth()->check()) {
            $validatedData = $request->validate([
                'hospital_id' => 'required',
                'date_time' => 'required',
            ]);

            $validatedData['utilisateur_id'] = auth()->user()->id;
            RendezVous::create($validatedData);

            return redirect()->route('rendezvous.create')
                ->with('success', 'Rendez-vous demandé avec succès.');
        } else {

            return redirect()->route('login')->with('error', 'Vous devez être connecté pour créer un rendez-vous.');
        }
    }

    public function show($id)
    {
        $rendezvous = RendezVous::findOrFail($id);
        return view('rendezvous.show', compact('rendezvous'));
    }

    public function edit($id)
    {
        $rendezvous = RendezVous::findOrFail($id);
        $hospitals = Hospital::all();
        return view('rendezvous.edit', compact('rendezvous', 'hospitals'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'hospital_id' => 'required',
            'date_time' => 'required',
        ]);

        $rendezvous = RendezVous::findOrFail($id);
        $rendezvous->update($validatedData);

        return redirect()->route('rendezvous.index')
            ->with('success', 'Rendez-vous mis à jour avec succès.');
    }

    public function destroy($id)
    {
        $rendezvous = RendezVous::findOrFail($id);
        $rendezvous->delete();

        return redirect()->route('rendezvous.index')
            ->with('success', 'Rendez-vous supprimé avec succès.');
    }
}
