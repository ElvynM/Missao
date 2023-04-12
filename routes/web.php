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
Route::get('/', function () {
    //return view('welcome');
    return redirect('/usuarios');
});

Route::controller(UsuariosController::class)->group(function(){
    Route::get('/usuarios','index');
    Route::get('/usuarios/criar','create');
    Route::post('/usuarios/criar','store');
    Route::get('/usuarios/edit/{id}','edit')->name('list_edit');
    Route::post('/usuarios/edit/{id}','update')->name('update');
    Route::get('/usuarios/delete/{id}','delete')->name('delete');
});





