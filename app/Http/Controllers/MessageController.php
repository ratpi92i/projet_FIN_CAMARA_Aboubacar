<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function create()
    {
        return view('utilisateurs.messages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $message = Message::create([
            'titre' => $request->input('titre'),
            'message' => $request->input('message'),
            'utilisateur_id' => auth()->id(),
        ]);

        return redirect()->route('messages.create')->with('success', 'Votre message a été envoyé avec succès.');
    }
}
