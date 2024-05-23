<?php

use App\Http\Controllers\ParserController;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\__API\RegisterController;
//use App\Http\Controllers\___API\ProductController;

include 'site.php';

include 'admin.php';


Route::get('/parser-attractions', [ParserController::class, 'attractions']);
Route::get('/parser-blog', [ParserController::class, 'blog']);


//Route::controller(RegisterController::class)->group(function(){
//    Route::get('register', 'showRegisterForm');
//    Route::post('register', 'register');
//    Route::get('login', 'showLoginForm');
//    Route::post('login', 'login');
//});
//
//Route::middleware('auth:sanctum')->group( function () {
//    Route::resource('products', ProductController::class);
//});





//
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\LogoutUserController;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

//    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
//                ->name('password.request');
//
//    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
//                ->name('password.email');
//
//    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
//                ->name('password.reset');
//
//    Route::post('reset-password', [NewPasswordController::class, 'store'])
//                ->name('password.store');
});

Route::get('logout', [LogoutUserController::class, 'logout'])->name('logout');
