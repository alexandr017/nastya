<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\StaticPages\StaticPage;

class StaticPagesController extends AdminController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = StaticPage::all();
        $breadcrumbs = 'Страницы';
        return view('admin.pages.index', compact('pages', 'breadcrumbs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $breadcrumbs = 'Страницы';
        return view('admin.pages.create', compact('breadcrumbs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $category = new StaticPage($data);
        $category->save();

        $request->session()->flash('alert-success', 'Элемент успешно добавлен');
        return redirect('/admin-panel/static-pages');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $page = StaticPage::find($id);

        if ($page == null) {
            return redirect('/admin-panel/static-pages');
        }

        $breadcrumbs = 'Страницы';
        return view('admin.pages.edit', compact('page','id', 'breadcrumbs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        $pages = StaticPage::find($id);

        if ($pages == null) {
            return redirect('/admin-panel/static-pages');
        }

        $pages->update($data);

        $request->session()->flash('alert-success', 'Элемент успешно отредактирован');
        return redirect('/admin-panel/static-pages');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request)
    {
        $pages = StaticPage::find($id);
        $pages->delete();

        $request->session()->flash('alert-success', 'Элемент успешно удален');
        return redirect('/admin-panel/static-pages');
    }
}
