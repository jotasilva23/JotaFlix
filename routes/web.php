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
    return view('welcome');
});

Route::get('/teste', function(){
    return view('site/teste');
});

/* Route::get('/sugestao',[TesteController, class]) */
Route::get('teste/controller', [TesteController::class, 'testeFunc']);


 Route::get('/forum', [ForumController::class, 'ReturnList'])->name('forum.ReturnLists');

Route::get('/forum/criar', [ForumController::class, 'createList'])->name('/forum.createList');