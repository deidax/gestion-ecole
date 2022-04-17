<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    use HasFactory;

    public function etudiants()
    {
        return $this->belongsToMany(Etudiant::class);
    }

    public function groupe()
    {
        return $this->belongsTo(Groupe::class);
    }

    public function elementModule()
    {
        return $this->belongsTo(ElementModule::class);
    }
}
