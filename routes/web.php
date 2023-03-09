<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Route::get    | Consulta
| Route::post   | Guarda
| Route::delete | Elimina
| Route::put    | Actualiza
|
*/

Route::get('/', [PageController::Class,'home'])->name('home');
Route::get('saludo/{nombre?}', [PageController::Class, 'saludo'])->name('saludo');
Route::get('contactos', [PageController::Class, 'contactos'])->name('contactos');
Route::post('contactos', [PageController::Class, 'mensajes']);