<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\IndexController;
use App\Http\Controllers\Site\AttractionsController;
use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\SitemapController;


Route::get('/', [IndexController::class, 'index']);
Route::get('/attractions', [AttractionsController::class, 'listOfAttractions']);
Route::get('/attractions/{alias}', [AttractionsController::class, 'opedAttraction']);
Route::get('login', function () { dd('login'); });
Route::get('/favorites', [AttractionsController::class, 'favorites']);
Route::get('/blog', [BlogController::class, 'blogIndex']);
Route::get('/blog/{alias}', [BlogController::class, 'opedPost']);
Route::get('/sitemap.xml', [SitemapController::class, 'index']);

//10 xml - карту сайта


// браузер -> запрос -> public/index.php -> routes/web.php -> view/test.blade.php
// браузер -> запрос -> public/index.php -> routes/web.php -> controller -> view/test.blade.php
