@extends('admin.layout')
@section('h1', 'Список записей блога')



@section('content')

    @if(Session::has('alert-success'))
        <div class="alert alert-success" role="alert">{{Session::get('alert-success')}}</div>
    @endif

    <a href="/admin-panel/blog/create" class="btn btn-info"><i class="fas fa-plus"></i> Добавить запись</a>


    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">H1</th>
            <th scope="col">Дата</th>
            <th scope="col">Статус</th>
            <th scope="col">Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->h1}}</td>
                <td>
                    {{date('d.m.Y', strtotime($post->date))}}
                </td>
                <td>
                    @if($post->status)
                        <span class="badge badge-success">Опубликована</span>
                    @else
                        <span class="badge badge-warning">Не опубликована</span>
                    @endif
                </td>
                <td>
                    <a href="/admin-panel/blog/edit/{{$post->id}}" class="btn btn-info" title="Редактировать"><i class="fas fa-pencil-alt"></i></a>

                    <form id="deleteItem" style="display: inline-block;vertical-align: -1px;" method="post" action="/admin-panel/blog/destroy/{{$post->id}}">
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

    <script>
        document.getElementById('deleteItem').addEventListener('submit', function (event) {
            event.preventDefault();
            return confirm('Вы действительно хотите удалить запись?');
        });
    </script>


@endsection
