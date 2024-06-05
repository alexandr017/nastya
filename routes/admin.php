<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AttractionCategoriesController;
use App\Http\Controllers\Admin\AttractionsController;
use App\Http\Controllers\Admin\ReviewsController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\StaticPagesController;

Route::get('admin-panel', [DashboardController::class, 'index']);

Route::get('admin-panel/attraction-categories', [AttractionCategoriesController::class, 'index']);
Route::get('admin-panel/attraction-categories/create', [AttractionCategoriesController::class, 'create']);
Route::post('admin-panel/attraction-categories/store', [AttractionCategoriesController::class, 'store']);
Route::get('admin-panel/attraction-categories/edit/{id}', [AttractionCategoriesController::class, 'edit']);
Route::post('admin-panel/attraction-categories/edit/{id}', [AttractionCategoriesController::class, 'update']);
Route::post('admin-panel/attraction-categories/destroy/{id}', [AttractionCategoriesController::class, 'destroy']);


Route::get('admin-panel/attractions', [AttractionsController::class, 'index']);
Route::get('admin-panel/attractions/create', [AttractionsController::class, 'create']);
Route::post('admin-panel/attractions/store', [AttractionsController::class, 'store']);
Route::get('admin-panel/attractions/edit/{id}', [AttractionsController::class, 'edit']);
Route::post('admin-panel/attractions/edit/{id}', [AttractionsController::class, 'update']);
Route::post('admin-panel/attractions/destroy/{id}', [AttractionsController::class, 'destroy']);


//Route::get('admin-panel/reviews', [ReviewsController::class, 'index']);
Route::get('admin-panel/blog', [BlogController::class, 'index']);
Route::get('admin-panel/blog/create', [BlogController::class, 'create']);
Route::post('admin-panel/blog/store', [BlogController::class, 'store']);
Route::get('admin-panel/blog/edit/{id}', [BlogController::class, 'edit']);
Route::post('admin-panel/blog/edit/{id}', [BlogController::class, 'update']);
Route::post('admin-panel/blog/destroy/{id}', [BlogController::class, 'destroy']);


Route::get('admin-panel/static-pages', [StaticPagesController::class, 'index']);
Route::get('admin-panel/static-pages/create', [StaticPagesController::class, 'create']);
Route::post('admin-panel/static-pages/store', [StaticPagesController::class, 'store']);
Route::get('admin-panel/static-pages/edit/{id}', [StaticPagesController::class, 'edit']);
Route::post('admin-panel/static-pages/edit/{id}', [StaticPagesController::class, 'update']);
Route::post('admin-panel/static-pages/destroy/{id}', [StaticPagesController::class, 'destroy']);





//- категории достопримечальтьностей (посмотреть, создать, отредактировать, улалить)
//- достопримечальтьности (посмотреть, создать, отредактировать, улалить)
//- записи (посмотреть, создать, отредактировать, улалить)
//- отзывы (посмотреть, создать, отредактировать, улалить)
//- статические страницы (посмотреть, создать, отредактировать, улалить)
