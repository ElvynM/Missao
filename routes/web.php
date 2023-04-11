<?php

use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

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

Route::get('/usuarios',[UsuariosController::class,'index']);
Route::get('/usuarios/criar',[UsuariosController::class,'create']);
Route::post('/usuarios/criar',[UsuariosController::class,'store']);
Route::get('/usuarios/edit/{id}',[UsuariosController::class,'edit'])->name('list_edit');
route::post('/usuarios/edit/{id}',[UsuariosController::class,'update'])->name('update');


Route::get('/', function () {
    return view('welcome');
});
