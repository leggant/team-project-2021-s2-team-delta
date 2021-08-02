<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::group(['prefix' => 'notes'], function () {
    Route::post('/', 'App\Http\Controllers\ApiController@createNote');
    Route::put('/{id}', 'App\Http\Controllers\ApiController@updateNote');
    Route::delete('/{id}', 'ApiController@deleteNote')->name(
        'notes.deleteNote'
    );
    Route::get('/', 'App\Http\Controllers\ApiController@getAllNotes');
    Route::get('/{id}', 'App\Http\Controllers\ApiController@getNote');
});

Route::group(['prefix' => 'cohorts'], function () {
    Route::post('/', 'App\Http\Controllers\ApiController@createCohort');
    Route::put('/{id}', 'App\Http\Controllers\ApiController@updateCohort');
    Route::delete('/{id}', 'App\Http\Controllers\ApiController@deleteCohort');
    Route::get('/', 'App\Http\Controllers\ApiController@getAllCohorts');
    Route::get('/{id}', 'App\Http\Controllers\ApiController@getCohort');
});
