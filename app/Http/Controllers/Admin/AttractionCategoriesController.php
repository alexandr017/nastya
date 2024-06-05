<?php

namespace App\Http\Controllers\Admin;

use App\Models\Attractions\AttractionCategory;
use Illuminate\Http\Request;


class AttractionCategoriesController extends AdminController
{
    public function index()
    {
        $categories = AttractionCategory::all();
        $breadcrumbs = 'Категории достопримечательностей';
        return view('admin.attraction.categories.index', compact('categories', 'breadcrumbs'));
    }

    public function create()
    {
        $breadcrumbs = 'Категории достопримечательностей';
        return view('admin.attraction.categories.create',  compact('breadcrumbs'));
    }
    public function store(Request $request)
    {
        $name = $request['name'];

        $category = new AttractionCategory();
        $category->name = $name;
        $category->save();

        $request->session()->flash('alert-success', 'Элемент успешно добавлен');
        return redirect('/admin-panel/attraction-categories');
    }
    public function edit($id)
    {
        $category = AttractionCategory::find($id);

        if ($category == null) {
            return redirect('/admin-panel/attraction-categories');
        }

        $breadcrumbs = 'Категории достопримечательностей';

        return view('admin.attraction.categories.edit', compact('id', 'category', 'breadcrumbs'));
    }
    public function update($id, Request $request)
    {
        $category = AttractionCategory::find($id);

        if ($category == null) {
            return redirect('/admin-panel/attraction-categories');
        }

        $category->name = $request['name'];
        $category->save();

        $request->session()->flash('alert-success', 'Элемент успешно отредактирован');
        return redirect('/admin-panel/attraction-categories');
    }
    public function destroy($id, Request $request)
    {
        $category = AttractionCategory::find($id);
        $category->delete();

        $request->session()->flash('alert-success', 'Элемент успешно удален');
        return redirect('/admin-panel/attraction-categories');
    }
}
