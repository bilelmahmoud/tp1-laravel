<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = ['document_nom_fr', 'document_nom_en', 'document_path', 'etudiant_id'];

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }
}
