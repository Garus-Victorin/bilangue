<?php

use Illuminate\Support\Facades\Route;
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
use Rebing\GraphQL\Facades\GraphQL;

Route::get('/', function () {
    return view('welcome');
});

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
