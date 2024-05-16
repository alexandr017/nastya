<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StaticPages\StaticPage;

class StaticPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = StaticPage::all();
        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.create');
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

        return view('admin.pages.edit', compact('page','id'));
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
