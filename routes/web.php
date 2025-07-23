<?php

use App\Http\Controllers\AdhesionController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CogefController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PubController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;


/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', [HomeController::class,'index'])->name('accueil');

Route::get('/actualités', [BlogController::class,'index'])->name('actualités');
Route::get('/actualite/{id}', [BlogController::class, 'show'])->name('actualite.show');

Route::get('/services', [ServiceController::class,'index'])->name('services');
Route::get('/contact', [ContactController::class,'index'])->name('contact');
Route::get('/publicités', [PubController::class,'index'])->name('publicités');
Route::get('/projets', [ProjetController::class,'index'])->name('projets');
Route::get('/adhésion', [AdhesionController::class,'index'])->name('adhésion');
Route::get('/cogef', [CogefController::class,'index'])->name('cogef');



/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
 */