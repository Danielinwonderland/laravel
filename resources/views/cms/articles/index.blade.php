@extends('cms.adminlte')

@section('h1', 'Статьи')

@section('content')
    <div class="row mb-3 mt-n5">
        <div class="col col-sm-12">
            <a href="{!! route('articles.create') !!}" class="btn btn-info float-right"><i class="fas fa-plus"></i> добавить статью</a>
        </div>
    </div>

    @if($articles->count() === 0)
    <div class="alert alert-info">
        <i class="icon fas fa-info"></i> Статей нет!
    </div>
    @else
    <div class="card">
        <div class="card-body p-0">
            <table class="table">
                <thead>
                <tr>
                    <th style="width: 10px">ID</th>
                    <th>Заголовок</th>
                    <th>Просмотрена</th>
                    <th>Активна</th>
                    <th style="width: 230px"></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>@if($article->seen)<i class="fa fa-check text-green"></i>@endif</td>
                    <td>
                        @if($article->active)
                            <i class="fa fa-check text-green"></i>
                        @else
                            <i class="fa fa-ban text-red"></i>
                        @endif
                    </td>
                    <td class="text-right">
                        <form method="post" action="{!! route('articles.destroy', [$article->id]) !!}">
                            {!! csrf_field() !!}
                            {!! method_field('DELETE') !!}
                            <button class="btn btn-xs btn-danger float-right delete-btn" type="submit" data-toggle="modal" data-target="#modal-delete-item" data-message="Удалить статью <b>{{ $article->title }}</b> [{{ $article->id }}]?"><i class="fas fa-trash"></i> удалить</button>
                        </form>
                        <a class="btn btn-default btn-xs float-right mr-2" href="{!! route('articles.edit', [$article->id]) !!}"><i class="fas fa-pencil-alt"></i> редактировать</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

    <div class="modal fade" id="modal-delete-item">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Удалить статью?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="modal-delete-item-text">Удалить статью?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
                    <button type="button" class="btn btn-primary confirm_action">Удалить</button>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection
