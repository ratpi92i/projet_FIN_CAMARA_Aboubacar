<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospital;

class HospitalController extends Controller
{
    public function index()
    {
        $hospitals = Hospital::all();
        return view('hospitals.index', compact('hospitals'));
    }

    public function create()
    {
        return view('hospitals.create');
    }

    public function store(Request $request)
    {
        $hospital = new Hospital();
        $hospital->nom = $request->input('nom');
        $hospital->ville = $request->input('ville');
        $hospital->localisation = $request->input('localisation');
        $hospital->contact = $request->input('contact');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $hospital->image = 'images/' . $imageName;
        }

        $hospital->save();

        return redirect()->route('hospitals.index');
    }

    public function edit($id)
    {
        $hospital = Hospital::findOrFail($id);
        return view('hospitals.edit', compact('hospital'));
    }

    public function update(Request $request, $id)
    {
        $hospital = Hospital::findOrFail($id);
        $hospital->nom = $request->input('nom');
        $hospital->ville = $request->input('ville');
        $hospital->localisation = $request->input('localisation');
        $hospital->contact = $request->input('contact');


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $hospital->image = 'images/' . $imageName;
        }

        $hospital->save();

        return redirect()->route('hospitals.index');
    }

    public function destroy($id)
    {
        $hospital = Hospital::findOrFail($id);
        $hospital->delete();

        return redirect()->route('hospitals.index');
    }

    public function utilisateursIndex()
{
    $hospitals = Hospital::all();
    return view('utilisateurs.hopitaux.index', compact('hospitals'));
}

}
