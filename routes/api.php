<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PatientController;
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

Route::group(['prefix' => 'auth'], function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::group(['middleware' => 'auth:api'], function() {
        Route::get('/logout', [AuthController::class, 'logout']);
    });
});

Route::middleware(['api'])->group(
    function () {
        Route::group(['prefix' => 'events'] , function(){
            Route::get('/', [EventController::class, 'index']);
            Route::get('/{id}', [EventController::class, 'show']);
            Route::post('/', [EventController::class, 'store']);
            Route::put('/{id}', [EventController::class, 'update']);
            Route::delete('/{id}', [EventController::class, 'destroy']);
        });
        Route::group(['prefix' => 'patients'] , function(){
            Route::get('/', [PatientController::class, 'index']);
            Route::get('/{id}', [PatientController::class, 'show']);
            Route::post('/', [PatientController::class, 'store']);
            Route::put('/{id}', [PatientController::class, 'update']);
            Route::delete('/{id}', [PatientController::class, 'destroy']);
        });
    });
