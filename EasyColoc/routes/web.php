<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ColocationController;
use App\Http\Controllers\ProfileController;
 use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('colocation',ColocationController::class);

Route::middleware('admin')->
Route::put('/admin/{user}/bannir',[AdminController::class,'bannir'])->name('admin.bannir');
Route::put('/admin/{user}/debannir',[AdminController::class,'debannir'])->name('admin.debannir');
Route::get('/admin',[AdminController::class,'index'])->name('admin.index');


require __DIR__.'/auth.php';
