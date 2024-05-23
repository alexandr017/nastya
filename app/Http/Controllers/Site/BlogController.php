<?php

namespace App\Http\Controllers\Site;

use App\Models\StaticPages\StaticPage;
use App\Models\Blog\Post;

class BlogController
{
    public function blogIndex()
    {
        $ID_PAGE = 4;
        $page = StaticPage::where(['id' => $ID_PAGE])->first();

        $posts = Post::where(['status' => 1])
            ->orderBy('date', 'desc')
            ->get();

        return view('site.blog-index', compact('page', 'posts'));
    }

    public function opedPost($alias)
    {
        return view('site.blog-opened');
    }

}
