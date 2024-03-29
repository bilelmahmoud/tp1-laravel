<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use Illuminate\Support\Facades\Auth;

class DocumentController extends Controller
{
    public function index()
    {
       
        $documents = Document::all();

        return view('document.index', compact('documents'));
    }
    public function create()
    {
        return view('document.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'document_nom_fr' => 'required|string|max:255',
        'document_path' => 'required|file|mimes:pdf,zip,doc,docx', 
    ]);

    $user = Auth::user();

    $document = new Document();
    $document->document_nom_fr = $request->document_nom_fr;
    

    if (!empty($request->document_nom_en)) {
        $document->document_nom_en = $request->document_nom_en;
    }
    
    $document->etudiant_id = $user->etudiant->id; 

    $path = $request->file('document_path')->store('document');

    $document->document_path = $path;
    $document->save();

    return redirect()->route('document.index')->with('success', 'Le document a été partagé avec succès.');
}



public function destroy(Document $document)
{
        $document->delete();
        return redirect()->route('document.index');

}
}