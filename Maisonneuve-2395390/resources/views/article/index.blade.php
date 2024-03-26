@extends('layouts.app')

@section('title', 'Articles')

@section('content')
    <div class="container">
        <h1>Articles</h1>
            
        @foreach($articles as $article)
            @if(!empty($article->{'title_'.app()->getLocale()}) && !empty($article->{'content_'.app()->getLocale()}))
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>{{ $article->{'title_'.app()->getLocale()} }}</h4>
                    </div>
                    <div class="card-body">
                        <p>{{ $article->{'content_'.app()->getLocale()} }}</p>
                        <p>@lang('lang.text_written_by') : <span class="fw-bold">{{ $article->etudiant->nom }}</span></p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('article.show', $article->id) }}" class="btn btn-sm btn-outline-success ">@lang('lang.text_view')</a>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endsection