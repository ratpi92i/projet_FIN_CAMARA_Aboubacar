<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Maladie extends Model
{
    protected $fillable = ['nom', 'symptomes', 'traitement', 'image'];
}
