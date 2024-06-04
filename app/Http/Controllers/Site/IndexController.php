<?php

namespace App\Http\Controllers\Site;

use App\Models\Attractions\Attraction;
use App\Models\Blog\Post;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\StaticPages\StaticPage;
use Auth;
use Illuminate\Support\Facades\Storage;
use DB;

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

    public function search (Request $request)
    {
        $s = addslashes(stripslashes(htmlspecialchars(strip_tags($request['atraction']))));

        $attractions = DB::table('attractions')
            ->leftJoin('attraction_categories', 'attractions.category_id', 'attraction_categories.id')
            ->select('attractions.*', 'attraction_categories.name as category_name')
            ->where(['attractions.status' => 1])
            ->where('attractions.h1', 'like', '%'.$s.'%')
            ->orWhere('attraction_categories.name', 'like', '%'.$s.'%')
            ->get();

        $page = StaticPage::where(['id' => 1])->first();
        if ($page == null) {
            abort(404);
        }

        $page->h1 = 'Результаты поиска';
        //$page->lead = 'Результаты поиска по запросу:' . $s;
        $page->lead = '';
        $page->breadcrumb = 'Результаты поиска';

        $favoritesAttractions = [];
        if (\Auth::id() != null) {
            if (!Storage::disk('local')->exists('favorites/' . \Auth::id() . '.txt')) {
                Storage::disk('local')->put('favorites/' . \Auth::id() . '.txt', '');
            } else {
                $favoritesString = Storage::disk('local')->get('favorites/' . \Auth::id() . '.txt');
                $favoritesAttractions = explode(',', $favoritesString);
            }
        }

        return view('site.search', compact('s', 'attractions', 'page', 'favoritesAttractions'));
    }
}
