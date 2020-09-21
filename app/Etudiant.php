<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'tel',
        'date_of_birth',
        'adresse',
        'diplome',
        'details'
    ];
}
