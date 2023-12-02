<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as AuthenticatableUser;
use Illuminate\Notifications\Notifiable;

class Utilisateur extends AuthenticatableUser
{
    use Notifiable;

    protected $table = 'utilisateurs';

    protected $fillable = [
        'nom', 'prenom', 'email', 'adresse', 'ville', 'secteur', 'contact', 'password',
    ];

    public function isAdmin()
    {
        return $this->role === 'admin';
    }


    public function messages()
    {
        return $this->hasMany(Message::class, 'utilisateur_id');
    }

    public function username()
    {
        return 'prenom';
    }

    public function rendezvous()
    {
        return $this->hasMany(RendezVous::class, 'utilisateur_id');
    }
}
