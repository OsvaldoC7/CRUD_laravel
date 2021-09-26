<?php

use App\Http\Controllers\PaginasController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/presentacion/{nombre}/{apellido?}', [PaginasController::class, 'presentacion']);
Route::get('/contacto', [PaginasController::class, 'contacto'])->name('contacto');
Route::get('/informacion', [PaginasController::class, 'informacion'])->name('informacion');
Route::post('/contacto', [PaginasController::class, 'recibeContacto'])->name('recibe_contacto');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
