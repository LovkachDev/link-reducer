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
    return view('index');
});

Route::prefix('api')->group(function () {
    Route::post('createLink', [\App\Http\Controllers\LinkController::class, 'create'])->name('create.link');
    Route::post('getProperty', [\App\Http\Controllers\LinkController::class, 'getProperty'])->name('create.property');
});
