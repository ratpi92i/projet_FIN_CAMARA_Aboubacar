<?php
namespace App\Models;



use Illuminate\Database\Eloquent\Model;
use App\Models\Utilsateur;
use App\Models\Hospital;

class RendezVous extends Model
{
    protected $table = 'rendez_vous';
    protected $fillable = ['utilisateur_id', 'hospital_id', 'date_time'];

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
