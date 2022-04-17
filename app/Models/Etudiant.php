<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Personne
{
    use HasFactory;

    protected $fillable = [
        'cne',
        'date_inscription',
    ];

    public function filter()
    {
        return $this->belongsTo(Filiere::class);
    }

    public function groupe()
    {
        return $this->belongsTo(Groupe::class);
    }

    public function semestre()
    {
        return $this->belongsTo(Semestre::class);
    }

    public function modules()
    {
        return $this->belongsToMany(Module::class);
    }

    public function seances()
    {
        return $this->belongsToMany(Seance::class);
    }

    public function notes()
    {
        $this->hasMany(Note::class);
    }

    public static function validationRules()
    {
        $etudiant_validation = [
            'cne' => 'required|max:6',
            'date_inscription' => 'required'
        ];

        return array_merge(parent::personneValidationRules(), $etudiant_validation);
    }

}
