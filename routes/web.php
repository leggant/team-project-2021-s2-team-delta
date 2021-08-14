<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\StudentController;
// use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

*/

Route::group(['middleware' => 'auth'], function(){
    Route::resource('students', StudentController::class)->except(['delete']);
    // wildcard name not needed, it's the default given in the first set of round brackets
    Route::resource('users', UserController::Class)->name('*', 'users');  
    Route::delete('/evidence/{id}', 'EvidenceController@destroy')->name(
        'evidence.destroy'
    );
    Route::get('/evidence', function () {
        return view('pages/evidence');
    })->name('evidence.index');
    Route::post('/evidence', 'EvidenceController@store')->name('evidence.store');
    Route::post('/cohort', 'ApiController@createCohort');
    Route::post('/notes', 'ApiController@createNote');

    Route::get('/cohort', 'PagesController@cohort')->name('pages.cohort');
    Route::get('/evidence', 'PagesController@evidence')->name('pages.evidence');
    Route::get('/notes', 'PagesController@notes')->name('pages.notes');
    Route::get('/cohort/{id}', 'PagesController@getCohort');
    Route::get('/admin-panel', function () {
        return view('admin.admin_panel');
    })->name('admin.admin-panel');
    // Return user to home any time a route is not found
    Route::fallback(function () {
        return redirect('/')->with('status', 'Error, Page Not Found');
    });
});

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('logout', function () {
    auth()->logout();
    Session()->flush();
    return Redirect::to('/');
})->name('logout');