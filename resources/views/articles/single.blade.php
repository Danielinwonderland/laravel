@extends('layouts.default')
@section('content')
    <h1>Articles</h1>
    @foreach ($articles as $article)

        <article>
            <h2>{{ $article->title }}</h2>
            <div class="body">{{ $article->summary }}</div>
            <p>Category: {{ $article->category->name }}</p>
            <dl class="dl-horizontal">
                <dt>Tags:
                @foreach ($article->tags as $tag)
                    <dd>{{ $tag->name }}</dd>
                @endforeach
                </dt>
            </dl>
            {!! Html::linkRoute('articles.show', 'Read More', array($article->id), array('class' => 'btn btn-primary btn-block')) !!}
        </article>

    @endforeach

@stop
