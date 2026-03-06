<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SalutationApiController;
use App\Http\Controllers\Api\NombreApiController;
use App\Http\Controllers\Api\CouleurApiController;
use App\Http\Controllers\Api\PresentationApiController;
use App\Http\Controllers\Api\DemandeAideApiController;
use App\Http\Controllers\Api\ExpressionEcoleApiController;
use App\Http\Controllers\Api\ExpressionMaisonApiController;
use App\Http\Controllers\Api\ExpressionVoyageApiController;
use App\Http\Controllers\Api\ProduitApiController;
use App\Http\Controllers\Api\ExpressionBasiqueApiController;
use App\Http\Controllers\Api\PhraseBasiqueApiController;
use App\Http\Controllers\Api\PartieDuCorpsApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// API Routes - Returns JSON
Route::apiResource('salutations', SalutationApiController::class);
Route::apiResource('nombres', NombreApiController::class);
Route::apiResource('couleurs', CouleurApiController::class);
Route::apiResource('presentations', PresentationApiController::class);
Route::apiResource('demandes-aide', DemandeAideApiController::class);
Route::apiResource('expressions-ecole', ExpressionEcoleApiController::class);
Route::apiResource('expressions-maison', ExpressionMaisonApiController::class);
Route::apiResource('expressions-voyage', ExpressionVoyageApiController::class);
Route::apiResource('produits', ProduitApiController::class);
Route::apiResource('expressions-basiques', ExpressionBasiqueApiController::class);
Route::apiResource('phrases-basiques', PhraseBasiqueApiController::class);
Route::apiResource('parties-du-corps', PartieDuCorpsApiController::class);
