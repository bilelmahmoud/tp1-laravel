<?php

namespace App\Http\Controllers;
use App\Models\Etudiant;
use App\Models\Ville;
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
        $villes = Ville::all(); 
        return view('etudiant.create', ['villes' => $villes]);
     }

     public function show(Etudiant $etudiant)
     {
         return view('etudiant.show', ['etudiant'=>$etudiant]);
     }

     public function store(Request $request)
{
    $request->validate([
        'nom' => 'required|string|max:255',
        'adresse' => 'required|string|max:255',
        'téléphone' => 'required|string|max:20',
        'email' => 'required|email|max:255',
        'date_de_naissance' => 'required|date',
        'ville_id' => 'required|exists:villes,id',
    ]);

    $etudiant = Etudiant::create([
        'nom' => $request->nom,
        'adresse' => $request->adresse,
        'téléphone' => $request->téléphone,
        'email' => $request->email,
        'date_de_naissance' => $request->date_de_naissance,
        'ville_id' => $request->ville_id,
    ]);

    return redirect()->route('etudiant.show', $etudiant->id)->with('success', 'Étudiant créé avec succès.');
}

 }     