<?php

use Illuminate\Support\Facades\Route;
use App\Models\Servicio;
use App\Http\Controllers\VerServicio;
use App\Http\Controllers\Reportes;
use App\Http\Controllers\Canal1;

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

Route::get('/', function () {
    return view('welcome');
});

//Canales
Route::get('/Canal1/{servicio_key}', [Canal1::class, 'show']);

//Webhooks
Route::get('/webhook_canal1/{servicio_key}', [Canal1::class, 'getStreamKey']);

Livewire::setUpdateRoute(function ($handle) {
    return Route::post('/public/livewire/update', $handle);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/video-servidores', function () {
        return view('videoservidores');
    })->name('videoservidor');

    Route::get('/servicios', function () {
        return view('servicios');
    })->name('servicios');

    Route::get('/reporte/{id_aplicacion}', [Reportes::class, 'show'])->name('reporte');
    Route::post('/reporte/{id_aplicacion}', [Reportes::class, 'enviarReporte'])->name('enviar-reporte');

    Route::get('/aplicacion/ver/{servicio_key}',  [VerServicio::class, 'show'])->name('ver_servicio');

    Livewire::setUpdateRoute(function ($handle) {
        $localePrefix = \Config::get('app.locale_prefix');
        return Route::post("/{$localePrefix}/livewire/update", $handle);
    });
});
