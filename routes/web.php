<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContribuinteController;
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
    return view('principal');
});
Route::get('/aplicativo', function () {
    return view('aplicativo');
});
Route::get('/ajuda', function () {
    return view('ajuda');
});

Route::get('/sobre', function () {
    return view('sobre');
});
Route::get('/termos', function () {
    return view('termos');
});
Route::get('/tags', function () {
    return view('tags');
});
Route::get('/utilizar', function () {
    return view('utilizar');
});
Route::middleware(['auth:sanctum', 'verified'])->group(
    function () {

    Route::get('/dashboard', function () {
      return view('dashboard');
    })->name('dashboard');
  
    Route::resource("/contribuinte", ContribuinteController::class);
});