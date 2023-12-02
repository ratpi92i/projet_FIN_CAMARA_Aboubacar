<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    public function rendezvous()
    {
        return $this->hasMany(RendezVous::class, 'hospital_id');
    }
}
