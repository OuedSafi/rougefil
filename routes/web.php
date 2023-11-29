<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\inscriptionController;
use Illuminate\Support\Facades\Route;

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

Route::get('/accueil', function () {
    return view('accueil');
});


Route::get('/niveaux', function () {
    return view('niveaux');
});


Route::get('/ecole', function () {
    return view('ecole');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/inscription', [InscriptionController::class, 'index']);
Route::post('/inscription', [InscriptionController::class, 'store'])->name('set');


Route::get('/recherche', function () {
    return view('recherche');
});
Route::POST('/recherche', [inscriptionController ::class, 'recherche'])->name('recherchesend');

Route::get('/inscription', 'InscriptionController@index');
Route::get('/inscription', [InscriptionController::class, 'index'])->name('inscription.index');

Route::get('/index', function () {
    return view('inscriptions.index');
});

Route::get('/paiement', function () {
    return view('paiement');
});

Route::get('/list', [InscriptionController::class, 'list'])->name('list');

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/accuel', function () {
    return view('accuel');
});

Route::get('/liste', function () {
    return view('liste');
});

Route::get('/liste', [InscriptionController::class, 'liste'])->name('liste');


Route::get('/niveaux/{nom}', [NiveauController::class, 'afficherNiveau'])->name('afficherNiveau');









Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/access', [InscriptionController::class, 'reservation1'])->name('statut_reservation1');
Route::get('/confirmation/{id}', [FInscriptionController::class, 'approuver'])->name('confirmation1');
Route::get('/annulation/{id}', [InscriptionController::class, 'annuler'])->name('annulation1');

Route::get('/gestion_reservation', [InscriptionController::class, 'reservation2'])->name('statut_reservation2');
Route::get('/confirmation2/{id}', [InscriptionController::class, 'approuver2'])->name('confirmation2');
Route::get('/annulation2/{id}', [InscriptionController::class, 'annuler2'])->name('annulation2');


require __DIR__.'/auth.php';
