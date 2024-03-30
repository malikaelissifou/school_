<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/etudiant', [EtudiantController::class, 'index'])->name('etudiant');

    Route::get('/etudiant/create', [EtudiantController::class, 'create'])->name('etudiant.create');

    Route::post('/etudiant/create', [EtudiantController::class, 'store'])->name('etudiant.ajouter');

    Route::delete('/etudiant/{etudiant}', [EtudiantController::class, 'delete'])->name('etudiant.supprimer');

    Route::get('/etudiant/{etudiant}', [EtudiantController::class, 'edit'])->name('etudiant.edit');

    Route::put('/etudiant/{etudiant}', [EtudiantController::class, 'update'])->name('etudiant.update');
    //////////////////////////////////////////////////////////////////////////////////////////////////

    Route::get('/prof', [ProfController::class, 'indexprof'])->name('prof');

    Route::get('/prof/create', [ProfController::class, 'createprof'])->name('prof.create');

    Route::post('/prof/create', [ProfController::class, 'storeprof'])->name('prof.ajouter');

    Route::delete('/prof/{prof}', [ProfController::class, 'deleteprof'])->name('prof.supprimer');

    Route::get('/prof/{prof}', [ProfController::class, 'editprof'])->name('prof.edit');

    Route::put('/prof/{prof}', [ProfController::class, 'updateprof'])->name('prof.update');
    ///////////////////////////////////////////////////////////////////////////////////////

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
