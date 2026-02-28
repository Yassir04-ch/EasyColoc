<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ColocationController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\DepenseController;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\PaiementController;
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



Route::middleware('CheckBanned')->group(function(){
    Route::put('/colocation/{colocation}/exite',[ColocationController::class,'exite'])->name('colocation.exite');
    Route::get('/colocation/{colocation}/show',[ColocationController::class,'show'])->name('colocation.show');
    Route::resource('colocation',ColocationController::class);
    Route::put('/admin/{user}/bannir',[AdminController::class,'bannir'])->name('admin.bannir');
    Route::put('/admin/{user}/debannir',[AdminController::class,'debannir'])->name('admin.debannir');
    Route::get('/admin/colocations',[AdminController::class,'colocations'])->name('admin.colocations');
    Route::get('/admin',[AdminController::class,'index'])->name('admin.index');
    Route::get('/categorie/{colocation}/create',[CategorieController::class,'create'])->name('categorie.create');
    Route::post('/categorie/{colocation}/store',[CategorieController::class,'create'])->name('categorie.store');
    Route::resource('categorie',CategorieController::class);
    Route::post('/invitation/{colocation}/store',[InvitationController::class,'store'])->name('invitation.store');
    Route::get('/invitation/accept/{token}',[InvitationController::class, 'accept'])->name('invitation.accept');
    Route::get('/depense/{colocation}/create',[DepenseController::class,'create'])->name('depense.create');
    Route::post('/depense/{colocation}/store',[DepenseController::class,'store'])->name('depense.store');
    Route::get('/depense/{colocation}', [DepenseController::class, 'index'])->name('depense.index');
    Route::put('/paiement/{depense}/paye',[PaiementController::class,'paye'])->name('paiement.paye');

    });

require __DIR__.'/auth.php';
