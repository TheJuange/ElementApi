<?php

use App\Http\Controllers\elementosController;
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


Route::get('all',[elementosController::class, 'index']); //muestra todos los elementos
Route::post('created',[elementosController::class,'store']); //registra un nuevo elemento
Route::get('search/{id}',[elementosController::class,'show']); //busca unn elemento por id
Route::put('update/{id}',[elementosController::class,'update']); //actualiza un elemento


