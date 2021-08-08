<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/evidence', function () {
    return view('pages/evidence');
})->name('evidence.index');

Route::delete('/evidence/{id}', 'EvidenceController@destroy')->name(
    'evidence.destroy'
);

Route::group(['middleware' => 'auth'], function(){
    Route::post('/evidence', 'EvidenceController@store')->name('evidence.store');
    Route::post('/cohort', 'ApiController@createCohort');
    Route::post('/add-student', 'addStudentController@storeData')->name(
        'addStudents.storeData'
    );
    Route::post('/notes', 'ApiController@createNote');

    Route::get('/', 'PagesController@index')->name('pages.index');
    Route::get('/add-student', 'PagesController@addStudent')->name(
        'pages.addStudent'
    );
    Route::get('/cohort', 'PagesController@cohort')->name('pages.cohort');
    Route::get('/evidence', 'PagesController@evidence')->name('pages.evidence');
    Route::get('/notes', 'PagesController@notes')->name('pages.notes');
    Route::get('/student/{id}', 'PagesController@getStudent')->name('pages.getStudent');
    Route::get('/cohort/{id}', 'PagesController@getCohort');
    Route::get('/admin-panel', function () {
        return view('admin.admin_panel');
    })->name('admin.admin-panel');
    Route::resource('users', UserController::Class)->name('*', 'users');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('logout', function () {
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');