<?php

use App\Http\Controllers\Api\AtmController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */


//Route::get('data', [\App\Http\Controllers\WelcomeController::class, 'getData']);


Route::prefix('atms')->group(function () {

    Route::get('/', [AtmController::class, 'index']);
    Route::get('/{id}', [AtmController::class, 'show']);
    Route::post('/find_by_lat_lng', [AtmController::class, 'findByLatLng']);
});
