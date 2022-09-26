<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrdenesController;
use App\Http\Controllers\PaginaController;

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

Route::get('/contacto', function () {
    return view('welcome');
});

Route::get('/contacto/{codigo?}', [PaginaController::class,'contacto']);

Route::get('/orden', [OrdenesController::class, 'index']);
Route::get('/orden/{id}', [OrdenesController::class, 'show']);

//Route::resource('orden', OrdenesController::class);