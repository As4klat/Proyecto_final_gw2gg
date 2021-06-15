<?php

use App\Http\Controllers\ActualizacionesController;
use App\Http\Controllers\ApikeyController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ScrapingController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\UserAdminController;
use App\Http\Controllers\UserNews;
use App\Http\Controllers\UserNewsController;
use App\Http\Controllers\ViewUserController;
use App\Models\Actualizaciones;
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
Route::get('/noticias/crear', [NewsController::class, 'create'])->middleware('verified')->name('news.create');
Route::post('/noticias/crear', [NewsController::class, 'save'])->middleware('verified')->name('news.save');
Route::get('/noticias/{new}/editar', [NewsController::class, 'edit'])->middleware('verified')->name('news.edit');
Route::patch('/noticias/{new}', [NewsController::class, 'update'])->middleware('verified')->name('news.update');
Route::get('/noticias/{new}', [NewsController::class, 'show'])->name('news.show');
Route::delete('/noticias/{new}/delete', [NewsController::class, 'destroy'])->middleware('verified')->name('news.destroy');

Route::get('/actualizaciones', [ActualizacionesController::class, 'index'])->name('actualizaciones.index');
Route::get('/actualizaciones{actualizacion}', [ActualizacionesController::class, 'show'])->name('actualizaciones.show');

Route::get('/solicitud', [SolicitudController::class, 'index'])->name('solicitud');
Route::post('/solicitud', [SolicitudController::class, 'save']);

Route::get('/perfil', [ViewUserController::class, 'index'])->middleware('verified')->name('perfil');
Route::delete('/perfil/admin/{user}/delete', [ViewUserController::class, 'destroyUser'])->middleware('verified')->name('perfil.destroy');
Route::patch('/perfil/password', [ViewUserController::class, 'changePassword'])->middleware('verified')->name('perfil.changePassword');
Route::patch('/perfil/email', [ViewUserController::class, 'changeEmail'])->middleware('verified')->name('perfil.changeEmail');

Route::get('/perfil/keys', [ApikeyController::class, 'index'])->middleware('verified')->name('apiform.index');
Route::post('/perfil/keys/crear', [ApikeyController::class, 'save'])->middleware('verified')->name('apiform.save');
Route::delete('/perfil/keys/delete/{key}', [ApikeyController::class, 'destroy'])->middleware('verified')->name('apiform.destroy');

Auth::routes(['verify' => true]);
