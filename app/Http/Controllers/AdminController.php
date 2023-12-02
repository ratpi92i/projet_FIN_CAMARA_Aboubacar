<?php

namespace App\Http\Controllers;
use App\Models\Message;
use App\Models\Utlisateur;

class AdminController extends Controller
{
    public function indexMessages()
    {
        $messages = Message::with('utilisateur')->latest()->paginate(3);
        return view('admin.messages.index', compact('messages'));
    }


}
