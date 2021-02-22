@extends('layouts.default')
@section('content')

    <h1>Articles</h1>
    @foreach($categories as $category)
        <h1>{{$category->name}}</h1>
        <ul>
            @foreach($category->articles as $article)
            <li>
                <a href="{!! route('articles.show', array($article->id)) !!}">{{ $article->title }}</a>
            </li>
            @endforeach
        </ul>
    @endforeach

@stop
