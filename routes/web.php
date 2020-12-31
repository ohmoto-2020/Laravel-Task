<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
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

Route::get('/hello', [HomeController::class, 'top']);

Route::get('/hello/{id}', [HomeController::class, 'show'])->where('id', '[0-9]+');

Route::get('/hello/new', [HomeController::class, 'new']);

Route::post('/hello/create', [HomeController::class, 'create']);

Route::get('/hello/edit/{id}', [HomeController::class, 'edit'])->where('id', '[0-9]+');

Route::post('/hello/update/{id}', [HomeController::class, 'update'])->where('id', '[0-9]+');

Route::get('/hello/delete/{id}', [HomeController::class, 'destroy'])->where('id', '[0-9]+');
