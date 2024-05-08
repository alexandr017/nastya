<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AttractionCategoriesController;
use App\Http\Controllers\Admin\AttractionsController;
use App\Http\Controllers\Admin\ReviewsController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\StaticPagesController;

Route::get('admin-panel', [DashboardController::class, 'index']);

Route::get('admin-panel/attraction-categories', [AttractionCategoriesController::class, 'index']);
Route::get('admin-panel/attractions', [AttractionsController::class, 'index']);
Route::get('admin-panel/reviews', [ReviewsController::class, 'index']);
Route::get('admin-panel/blog', [BlogController::class, 'index']);
Route::get('admin-panel/static-pages', [StaticPagesController::class, 'index']);





//- категории достопримечальтьностей (посмотреть, создать, отредактировать, улалить)
//- достопримечальтьности (посмотреть, создать, отредактировать, улалить)
//- записи (посмотреть, создать, отредактировать, улалить)
//- отзывы (посмотреть, создать, отредактировать, улалить)
//- статические страницы (посмотреть, создать, отредактировать, улалить)
