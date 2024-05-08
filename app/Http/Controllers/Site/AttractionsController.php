<?php

namespace App\Http\Controllers\Site;

use App\Models\StaticPages\StaticPage;

class AttractionsController
{
    public function listOfAttractions()
    {
        $ID_PAGE = 2;
        $page = StaticPage::where(['id' => $ID_PAGE])->first();
        return view('site.attractions', compact('page'));
    }

    public function opedAttraction($alias)
    {
        return view('site.attraction-details');
    }

    public function favorites()
    {
        $ID_PAGE = 3;
        $page = StaticPage::where(['id' => $ID_PAGE])->first();
        return view('site.favorites', compact('page'));
    }
}
