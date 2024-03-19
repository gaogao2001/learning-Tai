<?php

use App\Http\Controllers\UserController;

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

Route::get('/form', [\App\Http\Controllers\HomeController::class, 'form']);
Route::post('/form2-post', [\App\Http\Controllers\HomeController::class, 'form2']);
Route:: get('/create', [\App\Http\Controllers\HomeControlle::class, 'create']);
Route:: post('/create-post', [\App\Http\Controllers\HomeControlle::class, 'shows']);
Route:: get('/show', [\App\Http\Controllers\HomeControlle::class, 'shows']);
Route:: post('/update', [\App\Http\Controllers\HomeControlle::class, 'update']);
Route:: get('/home/{id}', [\App\Http\Controllers\HomeControlle::class, 'showw']);



