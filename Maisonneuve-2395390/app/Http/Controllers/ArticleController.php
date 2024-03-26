<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Resources\ArticleResource;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderByDesc('created_at')->get();
    
        return view('article.index', ['articles' => $articles]);
    }

    public function create()
    {
        return view('article.create');
    }

    
    /**
     * Affiche le formulaire de création d'article.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    
    // Création d'une nouvelle instance d'article
    $article = new Article();
    $article->title_en = $request->input('title_en');
    $article->content_en = $request->input('content_en');
    $article->title_fr = $request->input('title_fr');
    $article->content_fr = $request->input('content_fr');

    // Assigner l'ID de l'étudiant actuellement connecté
    $article->etudiant_id = Auth::user()->etudiant->id;

    // Sauvegarder l'article
    $article->save();

    // Redirection et message de succès
    return redirect()->route('article.index')->with('success', 'Article created successfully.');
}

public function show(Article $article)
{
    return view('article.show', ['article' => $article]);
}

public function edit(Article $article)
    {
        return view('article.edit', ['article' => $article]);
    }

    public function update(Request $request, Article $article)
    {
        // Valider les données du formulaire
        $article->title_en = $request->input('title_en');
        $article->content_en = $request->input('content_en');
        $article->title_fr = $request->input('title_fr');
        $article->content_fr = $request->input('content_fr');
        
        $article->save();
    
        // Rediriger vers la page d'affichage de l'article mis à jour
        return redirect()->route('article.show', $article->id)->with('success', 'Article updated successfully.');
    }
    


    public function destroy(Article $article)
    {

        $article->delete();
        return redirect()->route('article.index');
    }

    public function showPdf(Article $article)
    {
        $pdf = PDF::loadView('article.pdf', ['article' => $article]);
        return $pdf->stream('article.pdf');
    }
}
