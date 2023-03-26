<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperheroController;

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

Route::get('/Superhero', function () {
    return view('Superhero.index');
});

Route::get('/Superhero/crear', function () {   
    return view('Superhero.crear');
});

Route::get('/Superhero/editar', function () {   
    return view('Superhero.editar');
});

Route::get('/Superhero/eliminar', function () {   
    return view('Superhero.eliminar');
});

Route::resource('Superhero',SuperheroController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
