<?php

namespace App\Http\Controllers\Site;

class BlogController
{
    public function blogIndex()
    {
        dd('index');
    }

    public function opedPost($alias)
    {
        abort(404);
        dd($alias);
    }

}
