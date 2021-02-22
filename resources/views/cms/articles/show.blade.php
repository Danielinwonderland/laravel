@extends('cms.adminlte')

@section('h1', 'Просмотр статьи')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ $article->title }}</h3>
            <div class="card-tools">
                Created At: {{ date('M j, Y h:ia', strtotime($article->created_at)) }},
                Last Updated: {{ date('M j, Y h:ia', strtotime($article->updated_at)) }}
            </div>
        </div>
        <div class="card-body">
            {{ $article->content }}
            @if(!empty($article->category))
                <p>Category: {{ $article->category->name }}</p>
                <p>Parent Category: {{ $article->category->parent()->first()->name ?? '' }}</p>
            @endif
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            {!! Form::open(['route' => ['articles.destroy', $article->id], 'method' => 'DELETE']) !!}
            {!! Form::submit('Удалить', ['class' => 'btn btn-danger float-right']) !!}
            {!! Form::close() !!}
            {{ Html::linkRoute('articles.index', '<< Вернуться в список статей', array(), ['class' => 'btn btn-default']) }}
        </div>
        <!-- /.card-footer-->
    </div>
@endsection
