<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SalutationController;
use App\Http\Controllers\CouleurController;
use App\Http\Controllers\NombreController;
use App\Http\Controllers\PartieDuCorpsController;
use App\Http\Controllers\ExpressionBasiqueController;
use App\Http\Controllers\PhraseBasiqueController;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\DemandeAideController;
use App\Http\Controllers\ExpressionEcoleController;
use App\Http\Controllers\AccountSettingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Rebing\GraphQL\Facades\GraphQL;

// Auth Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Language Selection (2-Step Registration)
// Step 2a: Spoken language
Route::get('/register/langue-parlee', [RegisterController::class, 'showLangueParleeForm'])->middleware('auth')->name('register.langue-parlee');
Route::post('/register/langue-parlee', [RegisterController::class, 'saveLangueParlee']);

// Step 2b: Language to learn
Route::get('/register/langue-apprendre', [RegisterController::class, 'showLangueApprendreForm'])->middleware('auth')->name('register.langue-apprendre');
Route::post('/register/langue-apprendre', [RegisterController::class, 'saveLangueApprendre']);

// Home (protected) - Redirect to language selection if not done
Route::get('/home', function () {
    $user = Auth::user();
    if (!$user->langue_parlee) {
        return redirect('/register/langue-parlee');
    }
    if (!$user->langue_apprendre) {
        return redirect('/register/langue-apprendre');
    }
    return view('home');
})->middleware('auth')->name('home');

Route::get('/', function () {
    return redirect('/login');
});

// Learning routes (must be before resource routes)
Route::get('/learn/salutations', [SalutationController::class, 'learn'])->name('salutations.learn');
Route::get('/learn/nombres', [NombreController::class, 'learn'])->name('nombres.learn');
Route::get('/learn/couleurs', [CouleurController::class, 'learn'])->name('couleurs.learn');
Route::get('/learn/parties-du-corps', [PartieDuCorpsController::class, 'learn'])->name('parties_du_corps.learn');
Route::get('/learn/phrases-basiques', [PhraseBasiqueController::class, 'learn'])->name('phrases_basiques.learn');
Route::get('/learn/presentations', [PresentationController::class, 'learn'])->name('presentations.learn');
Route::get('/learn/demandes-aide', [DemandeAideController::class, 'learn'])->name('demandes_aide.learn');
Route::get('/learn/expressions-basiques', [ExpressionBasiqueController::class, 'learn'])->name('expressions_basiques.learn');
Route::get('/learn/expressions-ecole', [ExpressionEcoleController::class, 'learn'])->name('expressions_ecole.learn');
Route::get('/learn/expressions-maison', [App\Http\Controllers\ExpressionMaisonController::class, 'learn'])->name('expressions_maison.learn');
Route::get('/learn/expressions-voyage', [App\Http\Controllers\ExpressionVoyageController::class, 'learn'])->name('expressions_voyage.learn');
Route::get('/learn/produits', [App\Http\Controllers\ProduitController::class, 'learn'])->name('produits.learn');

Route::resource('salutations', SalutationController::class);
Route::resource('couleurs', CouleurController::class);
Route::resource('nombres', NombreController::class);
Route::resource('partie_du_corps', PartieDuCorpsController::class)->parameters(['partie_du_corps' => 'partieDuCorps']);
Route::resource('expressions_basiques', ExpressionBasiqueController::class)->parameters(['expressions_basiques' => 'expressionBasique']);
Route::resource('phrases_basiques', PhraseBasiqueController::class)->parameters(['phrases_basiques' => 'phraseBasique']);
Route::resource('presentations', PresentationController::class);
Route::resource('demandes_aide', DemandeAideController::class);
Route::resource('expressions_ecole', ExpressionEcoleController::class)->parameters(['expressions_ecole' => 'expressionEcole']);
Route::resource('expressions_maison', App\Http\Controllers\ExpressionMaisonController::class)->parameters(['expressions_maison' => 'expressionMaison']);
Route::resource('expressions_voyage', App\Http\Controllers\ExpressionVoyageController::class)->parameters(['expressions_voyage' => 'expressionVoyage']);
Route::resource('produits', App\Http\Controllers\ProduitController::class)->parameters(['produits' => 'produit']);

// Account Setting Routes
Route::get('/account/setting', [AccountSettingController::class, 'edit'])->name('account.setting.edit');
Route::put('/account/setting', [AccountSettingController::class, 'update'])->name('account.setting.update');
