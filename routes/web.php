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
Route::get('/noticias/crear', [NewsController::class, 'create'])->middleware('verified', 'puede')->name('news.create');
Route::post('/noticias/crear', [NewsController::class, 'save'])->middleware('verified', 'puede')->name('news.save');
Route::get('/noticias/{new}/editar', [NewsController::class, 'edit'])->middleware('verified', 'puede')->name('news.edit');
Route::patch('/noticias/{new}', [NewsController::class, 'update'])->middleware('verified', 'puede')->name('news.update');
Route::get('/noticias/{new}', [NewsController::class, 'show'])->name('news.show');
Route::delete('/noticias/{new}/delete', [NewsController::class, 'destroy'])->middleware('verified')->name('news.destroy');

Route::get('/actualizaciones', [ActualizacionesController::class, 'index'])->name('actualizaciones.index');
Route::get('/actualizaciones{actualizacion}', [ActualizacionesController::class, 'show'])->name('actualizaciones.show');

Route::get('/solicitud', [SolicitudController::class, 'index'])->name('solicitud');
Route::post('/solicitud', [SolicitudController::class, 'save']);

Route::get('/perfil', [ViewUserController::class, 'index'])->middleware('verified')->name('perfil');
Route::delete('/perfil/admin/{user}/delete', [ViewUserController::class, 'destroyUser'])->middleware('verified', 'puede')->name('perfil.destroy');
Route::get('/perfil/admin/{user}/editar', [ViewUserController::class, 'editUser'])->middleware('verified', 'puede')->name('perfil.editUser');
Route::patch('/perfil/admin/{user}', [ViewUserController::class, 'updateUser'])->middleware('verified', 'puede')->name('perfil.updateUser');
Route::patch('/perfil/password', [ViewUserController::class, 'changePassword'])->middleware('verified')->name('perfil.changePassword');
Route::patch('/perfil/email', [ViewUserController::class, 'changeEmail'])->middleware('verified')->name('perfil.changeEmail');
Route::patch('/perfil/solicitud/{solicitud}', [ViewUserController::class, 'solicitudSucces'])->middleware('verified', 'puede')->name('perfil.solicitudSucces');
Route::delete('/perfil/solicitud/delete/{solicitud}', [ViewUserController::class, 'solicitudDestroy'])->middleware('verified', 'puede')->name('perfil.solicitudDestroy');
Route::get('/perfil/solicitud/{solicitud}', [ViewUserController::class, 'solicitudShow'])->middleware('verified', 'puede')->name('perfil.solicitudShow');

Route::get('/keys', [ApikeyController::class, 'index'])->middleware('verified')->name('apiform.index');
Route::post('/keys/crear', [ApikeyController::class, 'save'])->middleware('verified')->name('apiform.save');
Route::delete('/keys/delete/{key}', [ApikeyController::class, 'destroy'])->middleware('verified')->name('apiform.destroy');

Route::view('/legal', 'legal')->name('legal');

Auth::routes(['verify' => true]);
