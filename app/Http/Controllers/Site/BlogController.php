<?php

namespace App\Http\Controllers\Site;

use App\Models\StaticPages\StaticPage;

class BlogController
{
    public function blogIndex()
    {
        $ID_PAGE = 4;
        $page = StaticPage::where(['id' => $ID_PAGE])->first();
        return view('blog-index', compact('page'));
    }

    public function opedPost($alias)
    {
        dd($alias);
    }

}
