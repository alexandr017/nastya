<?php

namespace App\Http\Controllers\Site;

class BlogController
{
    public function blogIndex()
    {
        return view('blog-index');
    }

    public function opedPost($alias)
    {
        abort(404);
        dd($alias);
    }

}
