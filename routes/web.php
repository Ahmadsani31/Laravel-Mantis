<?php

use App\Http\Controllers\ColorController;
use App\Http\Controllers\IconsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TypographyController;
use Illuminate\Support\Facades\Process;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard', ['pageTitle' => 'Dashboard']);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/typography', TypographyController::class)->name('typography');
    Route::get('/color', ColorController::class)->name('color');
    Route::get('/icons', IconsController::class)->name('icons');

    Route::get('/sample-page', function () {
        $pageTitle = 'Sample Page';
        return view('pages.sample-page', compact('pageTitle'));
    });
});

require __DIR__ . '/auth.php';
