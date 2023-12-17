<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\site\TesteController;
use App\Http\Controllers\Admin\ForumController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('site/index');
});

Route::get('/cadastroFilme', function () {
    return view('site/cadastroFilme');
});

Route::get('/cadastroUser', function () {
    return view('site/cadastroUser');
});

/*  */