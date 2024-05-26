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
        $post = Post::where(['alias' => $alias, 'status' => 1])->first();
        if ($post == null) {
            return abort(404);
        }
        return view('site.blog-opened', compact('post'));
    }

}
