<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\site\TesteController;
use App\Http\Controllers\Admin\ForumController;
use App\Http\Controllers\Api\FilmeController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\FilmeExtController;
use App\Http\Controllers\FilmeExternoController;

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


Route::get('/', [FilmeController::class, 'index']);

/* Rotas de filmes */
 Route::get('/index', [FilmeController::class, 'index']);

 Route::get('/insertFilmes', function () {
    return view('site/cadastroFilme');
});
Route::post('/insertFilme', [FilmeController::class, 'store'])->name('filme.insert');


/* Rotas para user */
Route::get('/list', function () {
    return view('site/listaUsers');
});

Route::get('/listUsers', [UserController::class, 'index']);

Route::get('/insertUsers', function () {
    return view('site/cadastroUser');
});

Route::post('/insertUser', [UserController::class, 'store'])->name('user.insert');



