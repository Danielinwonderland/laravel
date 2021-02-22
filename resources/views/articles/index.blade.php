@extends('layouts.default')
@section('content')
    <h1>Articles</h1>
    @foreach ($articles as $article)

    <article>
        <h2>{{ $article->title }}</h2>
        <div class="body">{{ $article->content }}</div>
        @if(!empty($article->category))
        <p>Category: {{ $article->category->name }}</p>
        <p>Parent Category: {{ $article->category->parent()->first()->name ?? '' }}</p>
        @endif
        <dl class="dl-horizontal">
            <dt>Tags:
            @foreach ($article->tags as $tag)
                <dd>{{ $tag->name }}</dd>
            @endforeach
            </dt>
        </dl>

    </article>

    @endforeach

@endsection
