@extends('admin.layout')
@section('h1', 'Список категорий достопримечательностей')



@section('content')

    <a href="/admin-panel/attraction-categories/create" class="btn btn-info"><i class="fas fa-plus"></i> Добавить категорию</a>


    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Название</th>
            <th scope="col">Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->name}}</td>
                <td>
                    <a href="/admin-panel/attraction-categories/edit/{{$category->id}}" class="btn btn-info" title="Редактировать"><i class="fas fa-pencil-alt"></i></a>

                    <form style="display: inline-block;vertical-align: -1px;" method="post" action="/admin-panel/attraction-categories/destroy/{{$category->id}}">
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
