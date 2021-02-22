@extends('cms.adminlte')

@section('h1', 'Редактирование категории')

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
        {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'patch']) !!}
            <div class="card-body">
                <div class="form-group">
                    {!! Form::label('name', 'Название') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                    @if($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                <div class="form-group">
                {{ Form::label('pid', 'Parent Category') }}
                {!! Form::select('pid', $categories, old('pid') ?? null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                {{ Form::label('sort', 'Сортировка') }}
                {{ Form::number('sort', old('sort') ?? 0, ['class' => 'form-control', 'min' => 0, 'step' => 1]) }}
                </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <a href="{{ route('categories.index') }}" class="btn btn-default">Отмена</a>
                {!! Form::submit('Сохранить', ['class' => 'btn btn-primary float-right']) !!}
            </div>
            <!-- /.card-footer -->
        {!! Form::close() !!}
    </div>
@endsection
