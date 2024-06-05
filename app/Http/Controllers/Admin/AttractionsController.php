<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Attractions\Attraction;
use App\Models\Attractions\AttractionCategory;

class AttractionsController  extends AdminController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attractions = Attraction::all();
        $breadcrumbs = 'Достопримечательности';
        return view('admin.attraction.attractions.index', compact('attractions', 'breadcrumbs'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = AttractionCategory::all();
        $breadcrumbs = 'Достопримечательности';
        return view('admin.attraction.attractions.create', compact('categories', 'breadcrumbs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $attraction = new Attraction($data);
        $attraction->save();

        $request->session()->flash('alert-success', 'Элемент успешно добавлен');
        return redirect('/admin-panel/attractions');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $attraction = Attraction::find($id);

        if ($attraction == null) {
            return redirect('/admin-panel/attractions');
        }

        $categories = AttractionCategory::all();
        $breadcrumbs = 'Достопримечательности';
        return view('admin.attraction.attractions.edit', compact('attraction', 'categories','id', 'breadcrumbs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        $attraction = Attraction::find($id);

        if ($attraction == null) {
            return redirect('/admin-panel/attractions');
        }

        $attraction->update($data);

        $request->session()->flash('alert-success', 'Элемент успешно отредактирован');
        return redirect('/admin-panel/attractions');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request)
    {
        $attraction = Attraction::find($id);
        $attraction->delete();

        $request->session()->flash('alert-success', 'Элемент успешно удален');
        return redirect('/admin-panel/attractions');
    }
}
