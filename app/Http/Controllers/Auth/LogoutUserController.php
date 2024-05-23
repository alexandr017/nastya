<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use \Auth;
class LogoutUserController extends Controller
{

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
