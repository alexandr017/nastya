<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FetchController
{
   public function addToFavorites(Request $request)
   {
       if (\Auth::id() != null) {
           $id = (int) $request->get('id');
           if (!Storage::disk('local')->exists('favorites/' . \Auth::id() . '.txt')) {
               Storage::disk('local')->put('favorites/' . \Auth::id() . '.txt', $id);
           } else {
               $favoritesString = Storage::disk('local')->get('favorites/' . \Auth::id() . '.txt');
               $favoritesString = str_replace(PHP_EOL, '', $favoritesString);
               $tmpArray = explode(',', $favoritesString);
               if (in_array($id, $tmpArray)) {
                   return;
               }
               $favoritesString .= ',' . $id;
               Storage::disk('local')->put('favorites/' . \Auth::id() . '.txt', $favoritesString);
           }
       }
   }

   public function removeFromFavorites(Request $request)
   {
       if (\Auth::id() != null) {
           $id = (int) $request->get('id');
           if (Storage::disk('local')->exists('favorites/' . \Auth::id() . '.txt')) {
               $favoritesString = Storage::disk('local')->get('favorites/' . \Auth::id() . '.txt');
               $favoritesString = str_replace(PHP_EOL, '', $favoritesString);
               $tmpArray = explode(',', $favoritesString);
               if (!in_array($id, $tmpArray)) {
                   return;
               }
               foreach ($tmpArray as $key => $value) {
                   if ($value == $id) {
                       unset($tmpArray[$key]);
                   }
               }
               $favoritesString = implode(',', $tmpArray);
               Storage::disk('local')->put('favorites/' . \Auth::id() . '.txt', $favoritesString);
           }
       }
   }

}
