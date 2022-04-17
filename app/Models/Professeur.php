<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professeur extends Personne
{
    use HasFactory;


    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function elementModule()
    {
        return $this->belongsTo(ElementModule::class);
    }
}
