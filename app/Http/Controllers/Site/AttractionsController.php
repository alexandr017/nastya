<?php

namespace App\Http\Controllers\Site;

use App\Models\StaticPages\StaticPage;
use App\Models\Attractions\Attraction;
use DB;
use Illuminate\Support\Facades\Storage;

class AttractionsController
{
    public function listOfAttractions()
    {
        $ID_PAGE = 2;
        $page = StaticPage::where(['id' => $ID_PAGE])->first();
        $attractions = DB::table('attractions')
            ->leftJoin('attraction_categories', 'attractions.category_id', 'attraction_categories.id')
            ->select('attractions.*', 'attraction_categories.name as category_name')
            ->where(['attractions.status' => 1])
            ->get();

        $favoritesAttractions = [];
        if (\Auth::id() != null) {
            if (!Storage::disk('local')->exists('favorites/' . \Auth::id() . '.txt')) {
                Storage::disk('local')->put('favorites/' . \Auth::id() . '.txt', '');
            } else {
                $favoritesString = Storage::disk('local')->get('favorites/' . \Auth::id() . '.txt');
                $favoritesAttractions = explode(',', $favoritesString);
            }
        }

        return view('site.attractions', compact('page', 'attractions', 'favoritesAttractions'));
    }

    public function opedAttraction($alias)
    {
        $attraction = Attraction::where(['alias' => $alias, 'status' => 1])->first();
        if ($attraction == null) {
            return abort(404);
        }

        return view('site.attraction-details', compact('attraction'));
    }

    public function favorites()
    {
        if (\Auth::id() == null) {
            return abort(404);
        }

        $ID_PAGE = 3;
        $page = StaticPage::where(['id' => $ID_PAGE])->first();

        $attractions = [];

        if (Storage::disk('local')->exists('favorites/' . \Auth::id() . '.txt')) {
            $favoritesString = Storage::disk('local')->get('favorites/' . \Auth::id() . '.txt');
            $attractionsIDArr = explode(',', $favoritesString);

            $attractions = DB::table('attractions')
                ->leftJoin('attraction_categories', 'attractions.category_id', 'attraction_categories.id')
                ->select('attractions.*', 'attraction_categories.name as category_name')
                ->where(['attractions.status' => 1])
                ->whereIn('attractions.id', $attractionsIDArr)
                ->get();
        }

        return view('site.favorites', compact('page', 'attractions'));
    }
}
