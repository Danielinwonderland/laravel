@extends('layouts.default')
@section('content')
    <h1>Категории</h1>
    @foreach ($categories as $category)

    <article>
        <h2>{{ $category->id }} {{ $category->name }}</h2>
        <div class="body">{{ $category->parent_id }}</div>
    </article>

    @endforeach

@endsection
