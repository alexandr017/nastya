<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $admins = config('admins');

        if (!in_array(\Auth::id(), $admins)) {
            abort(404);
        }
    }
}
