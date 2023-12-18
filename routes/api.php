<?php

use App\Http\Controllers\Api\FilmeController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/* ROTAS DE API PARA USUÁRIOS */
Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::put("/users/{id}", [UserController::class, 'update']);
Route::delete("users/{id}", [UserController::class , 'destroy']);


/* ROTAS DE API PARA FILMES */
Route::get('/filme', [FilmeController::class, 'index']);

Route::post('/filme', [FilmeController::class, 'store']);

Route::get('/filme/{id}', [FilmeController::class, 'show']);
Route::put("/filme/{id}", [FilmeController::class, 'update']);
Route::delete("filme/{id}", [FilmeController::class , 'destroy']);
