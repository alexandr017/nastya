@extends('admin.layout')
@section('h1', 'Список достопримечательностей')



@section('content')

    <a href="/admin-panel/attractions/create" class="btn btn-info"><i class="fas fa-plus"></i> Добавить достопримечательность</a>


    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Название</th>
            <th scope="col">Статус</th>
            <th scope="col">Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($attractions as $attraction)
            <tr>
                <th scope="row">{{$attraction->id}}</th>
                <td>{{$attraction->h1}}</td>
                <td>
                    @if($attraction->status)
                        <span class="badge badge-success">Опубликовано</span>
                    @else
                        <span class="badge badge-warning">Не опубликовано</span>
                    @endif
                </td>
                <td>
                    <a href="/admin-panel/attractions/edit/{{$attraction->id}}" class="btn btn-info" title="Редактировать"><i class="fas fa-pencil-alt"></i></a>

                    <form style="display: inline-block;vertical-align: -1px;" method="post" action="/admin-panel/attractions/destroy/{{$attraction->id}}">
                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}">

                        <div class="card-group">
                            <button type="submit" class="btn btn-danger" title="Удалить"><i class="fas fa-trash"></i></button>
                        </div>
                    </form>


                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection
