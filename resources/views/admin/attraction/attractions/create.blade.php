@extends('admin.layout')
@section('h1', 'Создание достопримечательности')



@section('content')


    <div class="card">
        <div class="card-body">
            <form method="post" action="/admin-panel/attractions/store">
                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}">


                <div class="form-group">
                    <label for="category_id" class="col-form-label">Категория</label>
                    <select name="category_id" id="category_id" class="form-control" required>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="alias" class="col-form-label">URL-альяс (/attractions/{alias})</label>
                    <input id="alias" name="alias" type="text" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="title" class="col-form-label">Заголовок</label>
                    <input id="title" name="title" type="text" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="h1" class="col-form-label">H1</label>
                    <input id="h1" name="h1" type="text" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="meta_description" class="col-form-label">Мета описание</label>
                    <input id="meta_description" name="meta_description" type="text" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="breadcrumb" class="col-form-label">Хлебные крошки</label>
                    <input id="breadcrumb" name="breadcrumb" type="text" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="preview" class="col-form-label">Ссылка на главное изображение</label>
                    <input id="preview" name="preview" type="text" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="content" class="col-form-label">Контент</label>
                    <textarea id="content" name="content" class="form-control" rows="10" required></textarea>
                </div>

                <div class="form-group">
                    <label for="distance_from_center" class="col-form-label">Расстояние от цента (в км)</label>
                    <input id="distance_from_center" name="distance_from_center" type="number" min="0" max="150" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="is_free_entry" class="col-form-label">Бесплатный вход</label>
                    <select name="is_free_entry" id="is_free_entry" class="form-control" required>
                        <option value="1">Да</option>
                        <option value="0">Нет</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="is_availability_of_excursions" class="col-form-label">Наличие экскурсии</label>
                    <select name="is_availability_of_excursions" id="is_availability_of_excursions" class="form-control" required>
                        <option value="1">Да</option>
                        <option value="0">Нет</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="status" class="col-form-label">Статус</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="1">Опубликовано</option>
                        <option value="0">Не опубликовано</option>
                    </select>
                </div>

                <div class="card-group">
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>
            </form>
        </div>


    </div>


@endsection



