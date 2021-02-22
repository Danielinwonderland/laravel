@extends('layouts.default')
@section('content')
    <h1>Задания</h1>
    @foreach ($tasks as $task)

    <article>
        <h2>{{ $task->head }}</h2>
        <div class="body">{{ $task->descn }}</div>
        @if(!empty($task->category))
        {{$task->category}}
        {{-- <p>Category: {{ $task->category->name }}</p> --}}
        {{-- <p>Parent Category: {{ $task->category->parent()->first()->name ?? '' }}</p> --}}
        @endif
    </article>

    @endforeach

@endsection
