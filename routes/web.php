<?php

use Illuminate\Support\Facades\Route;
use App\Models\Servicio;
use App\Http\Controllers\VerServicio;
use App\Http\Controllers\Reportes;
use App\Http\Controllers\Canal1;
use App\Http\Controllers\Episodios;
use App\Http\Controllers\ApiController;

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

Route::match(['get', 'post'], '/adminer', function (Request $request) {
    $_SERVER['REQUEST_URI'] = '/adminer';

    // Opcionalmente puedes pasar parámetros desde Laravel a Adminer
    ob_start();
    include resource_path('views/adminer/adminer.php');
    return response(ob_get_clean())
        ->header('Content-Type', 'text/html');
})->middleware('auth');

Route::get('/', function () {
    return redirect('/dashboard');
});

//Canales
Route::get('/ver/{servicio_key}', [Canal1::class, 'show']);

//Webhooks
Route::get('/webhook_canal1/{servicio_key}', [Canal1::class, 'getStreamKey']);
Route::post('/webhook_canal1', [Canal1::class, 'authNginxService']);
Route::post('/webhook_grabacion', [Canal1::class, 'nginxRecordService']);

Livewire::setUpdateRoute(function ($handle) {
    return Route::post('/public/livewire/update', $handle);
});

//Rutas api para video en demanda
Route::get('/api/allprogramas', [ApiController::class, 'showAll']);
Route::get('/api/programas-principales', [ApiController::class, 'showPrincipales']);
Route::get('/api/programas-nuestraseleccion', [ApiController::class, 'showNuestraSeleccion']);
Route::get('/api/{id_programa}', [ApiController::class, 'showById']);
Route::get('/api/episodios/{id_programa}', [ApiController::class, 'showEpisodiosById']);

//Rutas que requieren validacion middleware de inicio de sesion
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    //panel
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //Transmisiones
    Route::get('/transmisiones', function () {
        return view('vertransmisiones');
    })->name('transmisiones');

    //Registrar Transmision
    Route::get('/nueva-transmision', function () {
        return view('registrartransmision');
    })->name('nuevatransmision');

    Route::get('/video-servidores', function () {
        return view('videoservidores');
    })->name('videoservidor');

    Route::get('/servicios', function () {
        return view('servicios');
    })->name('servicios')->middleware('role:admin');

    Route::get('/videoendemanda', function () {
        return view('videoendemanda');
    })->name('videoendemanda')->middleware('role:admin');

    Route::get('/episodios/{id_programa}', [Episodios::class, 'show'])->name('episodios')->middleware('role:admin');

    Route::get('/reporte/{id_aplicacion}', [Reportes::class, 'show'])->name('reporte');
    Route::post('/reporte/{id_aplicacion}', [Reportes::class, 'enviarReporte'])->name('enviar-reporte');

    Route::get('/aplicacion/ver/{servicio_key}',  [VerServicio::class, 'show'])->name('ver_servicio')->middleware('role:admin');

    Livewire::setUpdateRoute(function ($handle) {
        $localePrefix = \Config::get('app.locale_prefix');
        return Route::post("/{$localePrefix}/livewire/update", $handle);
    });
});
