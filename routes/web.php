<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class, 'index']);

Route::get('/login', function () {
    return view('auth.login');
});


Route::get('/inicio', [InicioController::class, 'index']);

Route::resource('articulos', 'App\Http\Controllers\ArticuloController');
Route::resource('proyectos', 'App\Http\Controllers\ProyectoController');
Route::resource('skills', 'App\Http\Controllers\SkillController');
Route::resource('precios', 'App\Http\Controllers\PrecioController');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
