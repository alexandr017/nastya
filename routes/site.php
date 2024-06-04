<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\IndexController;
use App\Http\Controllers\Site\AttractionsController;
use App\Http\Controllers\Site\BlogController;
//use App\Http\Controllers\Site\SitemapController;
use App\Http\Controllers\Site\FetchController;


Route::get('/', [IndexController::class, 'index']);
Route::get('/attractions', [AttractionsController::class, 'listOfAttractions']);
Route::get('/attractions/{alias}', [AttractionsController::class, 'opedAttraction']);
Route::get('login', function () { dd('login'); });
Route::get('/favorites', [AttractionsController::class, 'favorites']);
Route::get('/blog', [BlogController::class, 'blogIndex']);
Route::get('/blog/{alias}', [BlogController::class, 'opedPost']);
//Route::get('/sitemap.xml', [SitemapController::class, 'index']);
Route::get('/search', [IndexController::class, 'search']);

Route::get('/add-to-favorites', [FetchController::class, 'addToFavorites']);
Route::get('/remove-from-favorites', [FetchController::class, 'removeFromFavorites']);

//10 xml - карту сайта
