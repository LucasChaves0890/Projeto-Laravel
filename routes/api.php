<?php

use App\Http\Controllers\Api\EpisodesController;
use App\Http\Controllers\Api\SeasonsController;
use App\Http\Controllers\Api\SeriesController;
use App\Models\Episode;
use App\Models\Series;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/series', [SeriesController::class, 'store']);
    Route::get('/series', [SeriesController::class, 'index']);
    Route::get('/series/{series}', [SeriesController::class, 'show']);
    Route::put('/series/{series}', [SeriesController::class, 'update'])->name('series.update');
    Route::delete('/series/{series}', [SeriesController::class, 'destroy'])->name('series.destroy');

    Route::get('/series/{series}/seasons', [SeasonsController::class, 'show']);

    Route::get('/series/{series}/episodes', [EpisodesController::class, 'show']);
    Route::patch('/episodes/{episode}', function (Episode $episode, Request $request) {
        $episode->watched = $request->watched;
        $episode->save();

        return $episode;
    });
});

Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials) === false) {
        return response()->json('Unauthorized', 401);
    };
    $user = Auth::user();
    
    $token = $user->createToken('token');

    return response()->json($token->plainTextToken);
});

/*
Route::get('/series/{series}/seasons',function (Series $series) {
    return $series->seasons;
});*/
