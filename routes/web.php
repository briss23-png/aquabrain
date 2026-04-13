<?php

use Illuminate\Support\Facades\Route;
// Importation du contrôleur que nous venons de créer
use App\Http\Controllers\SiteController;

// Route pour la Page d'Accueil
Route::get('/', [SiteController::class, 'index'])->name('home');

// Route pour la Page Expertise (la page à part)
Route::get('/expertise', [SiteController::class, 'expertise'])->name('expertise');

// Route pour la page qu sommes nous
Route::view('/qui-sommes-nous', 'qui-sommes-nous')->name('qui-sommes-nous');

// Route pour la page Nos services 
Route::view('/services', 'services')->name('services');

// Route pour realsations
Route::view('/realisations', 'realisations')->name('realisations');

// Route pour contacts
Route::view('/contact', 'contact')->name('contact');

// Route pour mention legale
Route::view('/mentions-legales', 'mentions-legales')->name('mentions-legales');