<?php

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

Route::get('/presentacion/{nombre}/{apellido?}', function($nombre = null, $apellido = null) {
    $nombre_completo = strtoupper($nombre . ' ' . $apellido);
    return view('presentacion', compact('nombre', 'apellido'))
        ->with(['nombre_completo' => $nombre_completo]);
});
