<?php

namespace App\Http\Controllers\Site;

use App\Models\Attractions\Attraction;
use App\Models\Blog\Post;
use Illuminate\Routing\Controller;
use App\Models\Reviews\Review;
use App\Models\StaticPages\StaticPage;
use Auth;
class IndexController extends Controller
{
    public function index()
    {
        $ID_PAGE = 1;
        //$reviews = Review::all();
        $page = StaticPage::where(['id' => $ID_PAGE])->first();

        $attractions = Attraction::where(['status' => 1])
            ->inRandomOrder()
            ->limit(3)
            ->get();

        $posts = Post::where(['status' => 1])
            ->orderBy('date', 'desc')
            ->limit(5)
            ->get();

        return view('site.index', compact( 'page', 'attractions','posts'));
    }
}
