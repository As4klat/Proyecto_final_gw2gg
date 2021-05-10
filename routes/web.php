<?php

use App\Http\Controllers\ActualizacionesController;
use App\Http\Controllers\ApikeyController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SolicitudController;
use App\Models\News;
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

Route::view('/', 'clan-about')->name('about');

Route::get('/noticias', [NewsController::class, 'index'])->name('news.index');
Route::get('/noticias/crear', [NewsController::class, 'create'])->name('news.create');
Route::post('/noticias/crear', [NewsController::class, 'save'])->name('news.save');
Route::get('/noticias/{new}', [NewsController::class, 'show'])->name('news.show');

Route::get('/actualizaciones', [ActualizacionesController::class, 'index'])->name('actualizaciones');

Route::get('/solicitud', [SolicitudController::class, 'index'])->name('solicitud');
Route::post('/solicitud', [SolicitudController::class, 'save']);

Route::view('/perfil', 'perfiles.user-view')->middleware('auth')->name('perfil');

Route::get('/perfil/keys', [ApikeyController::class, 'index'])->middleware('auth')->name('apiform');
Route::post('/perfil/keys', [ApikeyController::class, 'save'])->middleware('auth')->name('apiform.save');
Route::delete('/perfil/keys', [ApikeyController::class, 'delete'])->middleware('auth')->name('apiform.delete');

Auth::routes();
