<?php

use App\Http\Controllers\Error\ErrorController;
use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\Pages\ServerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/help', function () {
    return view('pages.help');
})->name('help');


// Сервера по майнкрафту

Route::get('/servers', [ServerController::class, 'index'])->name('server.list');
Route::get('/servers/{server}', [ServerController::class, 'show'])->name('servers.show');
Route::get('/servers/{server}/play', [ServerController::class, "play"])->name('servers.play');


// Ошибки
Route::fallback([ErrorController::class, 'index'])->name("error");

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Переписать
require __DIR__ . '/auth.php';
