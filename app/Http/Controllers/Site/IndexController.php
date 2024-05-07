<?php

namespace App\Http\Controllers\Site;

use Illuminate\Routing\Controller;
use App\Models\Reviews\Review;
use App\Models\StaticPages\StaticPage;
class IndexController extends Controller
{
    public function index()
    {
        $ID_PAGE = 1;
        $reviews = Review::all();
        $page = StaticPage::where(['id' => $ID_PAGE])->first();
        return view('index', compact('reviews', 'page'));
    }
}
