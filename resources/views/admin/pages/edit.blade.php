@extends('admin.layout')
@section('h1', 'Редактирование статической страницы')



@section('content')


    <div class="card">
        <div class="card-body">
            <form method="post" action="/admin-panel/static-pages/edit/{{$id}}">
                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}">

                <div class="form-group">
                    <label for="alias" class="col-form-label">URL-альяс</label>
                    <input id="alias" name="alias" type="text" class="form-control" required value="{{$page->alias}}">
                </div>

                <div class="form-group">
                    <label for="title" class="col-form-label">Заголовок</label>
                    <input id="title" name="title" type="text" class="form-control" required value="{{$page->title}}">
                </div>

                <div class="form-group">
                    <label for="h1" class="col-form-label">H1</label>
                    <input id="h1" name="h1" type="text" class="form-control" required value="{{$page->h1}}">
                </div>

                <div class="form-group">
                    <label for="meta_description" class="col-form-label">Мета описание</label>
                    <input id="meta_description" name="meta_description" type="text" class="form-control" required value="{{$page->meta_description}}">
                </div>

                <div class="form-group">
                    <label for="breadcrumb" class="col-form-label">Хлебные крошки</label>
                    <input id="breadcrumb" name="breadcrumb" type="text" class="form-control" required value="{{$page->breadcrumb}}">
                </div>

                <div class="form-group">
                    <label for="lead" class="col-form-label">Текст после заголовка</label>
                    <textarea id="lead" name="content" class="form-control" rows="10">{{$page->lead}}</textarea>
                </div>

                <div class="form-group">
                    <label for="content" class="col-form-label">Контент</label>
                    <textarea id="content" name="content" class="form-control" rows="10">{{$page->content}}</textarea>
                </div>

                <div class="card-group">
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>
            </form>
        </div>


    </div>


@endsection



