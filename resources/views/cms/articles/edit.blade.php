@extends('cms.adminlte')

@section('css_additional')
    <!-- Select2 -->
    {!! Html::style('/adminlte/plugins/select2/css/select2.min.css') !!}
@endsection

@section('js_additional')
    <!-- Select2 -->
    {!! Html::script('/adminlte/plugins/select2/js/select2.full.min.js') !!}
@endsection

@section('h1', 'Редактирование статьи')

@section('content')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{!! $error !!}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <!-- form start -->
        {!! Form::model($article, ['route' => ['articles.update', $article->id], 'method' => 'patch']) !!}
            <div class="card-body">
                <div class="form-group">
                    {!! Form::label('title', 'Title') !!}
                    {!! Form::text('title', old('name'), ['class' => 'form-control']) !!}
                    @if($errors->has('title'))
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    @endif
                </div>

                <div class="form-group">
                    {{ Form::label('category_id', 'Select Category') }}
                    {!! Form::select('category_id', $categories, old('category_id'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {{ Form::label('tag_list', 'Tags') }}
                    {!! Form::select('tag_list[]', $tags, $article->tags, ['class' => 'form-control select2', 'multiple']) !!}
                </div>

                <div class="form-group">
                {!! Form::label('summary', 'Summary') !!}
                {!! Form::text('summary', old('summary'), array('class' => 'form-control')) !!}
                </div>

                <div class="form-group">
                {!! Form::label('content', 'Content') !!}
                {!! Form::textarea('content', old('content'), array('class' => 'form-control')) !!}
                </div>

                <div class="form-group">
                {{ Form::label('seo_title', 'Seo Title') }}
                {{ Form::text('seo_title', old('seo_title'), array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                {{ Form::label('seo_key', 'Seo seo_key') }}
                {{ Form::text('seo_key', old('seo_key'), array('class' => 'form-control')) }}
                </div>

                <div class="form-group">
                {{ Form::label('seo_desc', 'Seo seo_desc') }}
                {{ Form::text('seo_desc', old('seo_desc'), array('class' => 'form-control')) }}
                </div>

                <div class="form-check">
                    {{ Form::checkbox('seen', 1, null, array('class' => 'form-check-input', 'id' => 'seen')) }}
                    {{ Form::label('seen', 'Seen', ['class' => 'form-check-label']) }}
                </div>

                <div class="form-check">
                    {{ Form::checkbox('active', 1, null, array('class' => 'form-check-input', 'id' => 'active')) }}
                    {{ Form::label('active', 'Active', ['class' => 'form-check-label']) }}
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <a href="{{ route('articles.index') }}" class="btn btn-default">Отмена</a>
                {!! Form::submit('Сохранить', ['class' => 'btn btn-primary float-right']) !!}
            </div>
            <!-- /.card-footer -->
        {!! Form::close() !!}
    </div>
@endsection
