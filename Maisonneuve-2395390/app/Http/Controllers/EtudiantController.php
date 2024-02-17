<?php

namespace App\Http\Controllers;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index(){

      $etudiants = Etudiant::all();
      return view('etudiant.index', ["etudiants" => $etudiants]);

     }
     public function about(){

        return view('about');

     }
     public function article(){

        return view('article');

     }
     public function contact(){

        return view('contact');

     }
     public function contactForm(Request $request){

       return view('contact', ['data'=> $request]);

     }
}
