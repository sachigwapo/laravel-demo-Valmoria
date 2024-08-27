<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CalculatorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route:: get('/Calculator', [CalculatorController::class, 'showCalculatorPage']);

Route::get('/Index', function () {
    return view('mypages.Index');
})->name('Index');

Route::get('/Gallery', function () {
    return view('mypages.Gallery');
})->name('Gallery');

Route::get('/Services', function () {
    return view('mypages.Services');
})->name('Services');











Route::get('/dwightbayot', function () {
    return view("isaach");	
});

Route::get('/dashboard', function () {
	return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
