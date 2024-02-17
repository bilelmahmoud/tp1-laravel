<?php

namespace App\Http\Controllers;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
 {
    public function index()
     {
      $etudiants = Etudiant::all();
      return view('etudiant.index', ["etudiants" => $etudiants]);
     }

     public function create()
     {
      return view('etudiant.create');
     }

     public function show(Etudiant $etudiant)
     {
         return view('etudiant.show', ['etudiant'=>$etudiant]);
     }
 }     