<?php

namespace App\Http\Controllers\Site;

use App\Models\StaticPages\StaticPage;

class BlogController
{
    public function blogIndex()
    {
        $ID_PAGE = 4;
        $page = StaticPage::where(['id' => $ID_PAGE])->first();
        return view('site.blog-index', compact('page'));
    }

    public function opedPost($alias)
    {
        return view('site.blog-opened');
    }

}
