<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-student', function () {
    return view('add-student');
})->name('addStudent.index');



Route::get('/notes-observation', function () {
    return view('notes-observation');
});

Route::get('/cohort', function () {
    return view('cohort');
});
*/
Route::get('/evidence', function () {return view('pages/evidence');})->name('evidence.index');

Route::delete('/evidence/{id}', 'EvidenceController@destroy')->name('evidence.destroy');;

//for storing evidence (need to create 'test' table in 'Laragon' database)
Route::post('/evidence','EvidenceController@store')->name('evidence.store');
Route::post('/cohort', 'ApiController@createCohort');
Route::post('/add-student', 'addStudentController@storeData')->name('addStudents.storeData');
Route::post('/notes', 'ApiController@createNote');



Route::get('/','PagesController@index')->name('pages.index');
Route::get('/add-student','PagesController@addStudent')->name('pages.addStudent');
Route::get('/cohort','PagesController@cohort')->name('pages.cohort');
Route::get('/evidence','PagesController@evidence')->name('pages.evidence');
Route::get('/notes','PagesController@notes')->name('pages.notes');
//Route::get('/notes-observation','App\Http\Controllers\PagesController@notesObservation')->name('pages.notesObservation');

Route::get('/student/{id}', 'PagesController@getStudent');


Route::get('dashboard', [authController::class, 'dashboard']); 
Route::get('login', [authController::class, 'index'])->name('login');
Route::post('custom-login', [authController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [authController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [authController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signOut', [authController::class, 'signOut'])->name('signOut');

Route::get('/cohort/{id}', 'PagesController@getCohort');

