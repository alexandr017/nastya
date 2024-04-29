<?php

namespace App\Http\Controllers\Site;

class AttractionsController
{
    public function listOfAttractions()
    {
        return dd('list');
    }

    public function opedAttraction($alias)
    {
        return dd($alias);
    }

    public function favorites()
    {
        return dd('favorites');
    }
}
