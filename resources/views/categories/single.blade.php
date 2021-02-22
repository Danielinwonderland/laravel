@extends('layouts.default')
@section('content')
    <h1>Single Post</h1>

    @if (empty($latestPost))
      <p>Sorry, no category to show!</p>
    @else
          <article class="latest-post">
            <div class="entry-title"> {{ $latestPost->title }} </div>
            <div class="entry-digest"> {{ $latestPost->summary }} </div>
          </article>
    @endif
{{----}}
{{--    @if (empty($categories))
      <p>Sorry, no category to show!</p>
    @else
        @foreach ($categories as $category)
            @if($category->articles()->latest()->count() > 0)
                {{ $category->articles()->latest()->first()->title }}<br>
            @endif
        @endforeach
    @endif--}}
{{--
    @foreach ($categories as $category)
      {{ $category->articles->first()->title }}
      <br>
    @endforeach
--}}
{{--
    @if (empty($categories))
      <p>Sorry, no category to show!</p>
    @else
    
      @foreach ($categories as $category)
        {{ $category->articles()->latest()->first()->title }}
        <br>
      @endforeach
    @endif
--}}
{{--    @foreach ($categories as $category)
        @if(!empty($category->latestPost))
            {{ $category->latestPost->title }}
            <br>
        @endif
    @endforeach--}}
@stop
