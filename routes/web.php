<?php
include 'site.php';

include 'admin.php';


use App\Http\Controllers\ParserController;

Route::get('/parser-attractions', [ParserController::class, 'attractions']);
Route::get('/parser-blog', [ParserController::class, 'blog']);


// браузер -> запрос -> public/index.php -> routes/web.php -> view/test.blade.php
// браузер -> запрос -> public/index.php -> routes/web.php -> controller -> view/test.blade.php
