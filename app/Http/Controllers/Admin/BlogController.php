<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog\Post;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $post = new Post($data);
        $post->save();

        $request->session()->flash('alert-success', 'Элемент успешно добавлен');
        return redirect('/admin-panel/blog');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);

        if ($post == null) {
            return redirect('/admin-panel/blog');
        }

        return view('admin.post.edit', compact('post','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        $post = Post::find($id);

        if ($post == null) {
            return redirect('/admin-panel/blog');
        }

        $post->update($data);

        $request->session()->flash('alert-success', 'Элемент успешно отредактирован');
        return redirect('/admin-panel/blog');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request)
    {
        dd(1);
        $post = Post::find($id);

        if ($post == null) {
            return redirect('/admin-panel/blog');
        }

        $post->delete();

        $request->session()->flash('alert-success', 'Элемент успешно удален');
        return redirect('/admin-panel/blog');
    }
}
