<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\EmpruntController;
use App\Http\Controllers\AuteurController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/home', function () {
    return view('livres.home');
});

Route::resource('/livres', LivreController::class);
Route::resource('/emprunts', EmpruntController::class);
Route::resource('/auteurs', AuteurController::class);
Route::get('/download/fiche/pdf', [EmpruntController::class, 'downloadPDF'])->name('download1.fiche');
Route::get('/download/fiche/excel', [EmpruntController::class, 'downloadExcel'])->name('download2.fiche');
Route::post('/importexcel', [LivreController::class, 'import'])->name('import.excel');

Route::middleware('auth')->group(function () {
    Route::get('/livres',  [LivreController::class, 'index'])->name('livres.index');
});
