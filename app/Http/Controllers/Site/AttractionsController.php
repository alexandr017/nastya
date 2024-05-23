<?php

namespace App\Http\Controllers\Site;

use App\Models\StaticPages\StaticPage;
use App\Models\Attractions\Attraction;

class AttractionsController
{
    public function listOfAttractions()
    {
        $ID_PAGE = 2;
        $page = StaticPage::where(['id' => $ID_PAGE])->first();
        $attractions = Attraction::where(['status' => 1])->get();
        return view('site.attractions', compact('page', 'attractions'));
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
        $ID_PAGE = 3;
        $page = StaticPage::where(['id' => $ID_PAGE])->first();
        return view('site.favorites', compact('page'));
    }
}
