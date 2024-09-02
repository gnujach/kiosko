<?php

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\TramiteController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('home');
Route::get('/tutoriales', function () {
    return Inertia::render('Tutoriales', []);
})->name('tutoriales');
Route::get('/videos/constancia', function () {
    return Inertia::render('Videos/Constancia', []);
})->name('videos/constancia');
Route::get('/videos/certificado', function () {
    return Inertia::render('Videos/Certificado', []);
})->name('videos/certificado');





Route::get('/team', function () {
    return Inertia::render('Team');
});
Route::get('/equipo/', [EmpleadoController::class, 'index'])->name('equipo/');
Route::get('/tramites/', [TramiteController::class, 'index'])->name('tramites/');
Route::get('/tramites/{tramite:uuid}/show', [TramiteController::class, 'show'])->name('tramites/show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
