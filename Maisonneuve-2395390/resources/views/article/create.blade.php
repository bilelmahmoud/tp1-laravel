@extends('layouts.app')
@section('title', trans('lang.text_create'))
@section('content')
    <div class="container">

        <form action="{{ route('article.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title (English)</label>
                <input type="text" name="title_en" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="content">Content (English)</label>
                <textarea name="content_en" id="content" class="form-control" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="title">Title (French)</label>
                <input type="text" name="title_fr" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="content">Content (French)</label>
                <textarea name="content_fr" id="content" class="form-control" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">@lang('lang.text_create')</button>
        </form>
    </div>
@endsection
