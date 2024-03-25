<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Etudiant;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title_fr', 'content_fr','title_en', 'content_en', 'etudiant_id'];
    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }
}

