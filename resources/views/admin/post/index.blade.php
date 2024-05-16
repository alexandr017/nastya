@extends('admin.layout')
@section('h1', 'Список статических страниц')



@section('content')

    <a href="/admin-panel/static-pages/create" class="btn btn-info"><i class="fas fa-plus"></i> Добавить страницу</a>


    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">H1</th>
            <th scope="col">Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pages as $page)
            <tr>
                <th scope="row">{{$page->id}}</th>
                <td>{{$page->h1}}</td>
                <td>
                    <a href="/admin-panel/static-pages/edit/{{$page->id}}" class="btn btn-info" title="Редактировать"><i class="fas fa-pencil-alt"></i></a>

                    <form style="display: inline-block;vertical-align: -1px;" method="post" action="/admin-panel/static-pages/destroy/{{$page->id}}">
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
