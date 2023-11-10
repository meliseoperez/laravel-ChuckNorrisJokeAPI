<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChisteController;

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

/*Route::get('/', function () {
    return view('welcome');
});
Route::get('/', 'ChisteController@obtener@index');


*/
Route::get('/cover', function () {
    return view('mainView');
});
// Ruta para obtener las categorías de chistes
Route::get('/chistes', [ChisteController::class, 'index']);
Route::post('/chistes/random', [ChisteController::class, 'obtenerChiste']);
Route::get('/chistes/random', [ChisteController::class, 'obtenerChiste']);




