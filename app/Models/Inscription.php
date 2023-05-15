<?php

namespace App\Models;

use App\Models\Classe;
use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inscription extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'matricule', 'matricule');
    }


    public function classe(): BelongsTo
    {
        return $this->belongsTo(Classe::class, 'codeClasse', 'codeClasse');
    }
}
