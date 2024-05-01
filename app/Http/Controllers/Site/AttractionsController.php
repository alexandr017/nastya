<?php

namespace App\Http\Controllers\Site;

class AttractionsController
{
    public function listOfAttractions()
    {
        return view('attractions');
    }

    public function opedAttraction($alias)
    {
        return view('attraction-details');
    }

    public function favorites()
    {
        return dd('favorites');
    }
}
