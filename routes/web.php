<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/cars/{id}', [App\Http\Controllers\HomeController::class, 'cars'])
    ->name('cars');

Route::get('/{brand?}', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');

Route::get('/admin/21232f297a57a5a743894a0e4a801fc3', [App\Http\Controllers\HomeController::class, 'adminPage'])
    ->name('admin');

Route::post('/admin/21232f297a57a5a743894a0e4a801fc3/add', [App\Http\Controllers\HomeController::class, 'adminAdd'])
    ->name('admin.add');
