@extends('admin.layout')
@section('h1', 'Редактирование категории достопримечательностей')



@section('content')


    <div class="card">
        <div class="card-body">
            <form method="post" action="/admin-panel/attraction-categories/edit/{{$id}}">
                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}">
                <div class="form-group">
                    <label for="name" class="col-form-label"><i>*</i> Название</label>
                    <input id="name" name="name" type="text" class="form-control" value="{{$category->name}}">
                </div>
                <div class="card-group">
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>
            </form>
        </div>


    </div>


@endsection



