<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    StudentController,
    UserController,
    CohortController,
    EvidenceController,
    NoteController,
    PaperController
};

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

Route::group(['middleware' => 'auth'], function () {
    Route::group(['middleware' => 'prevent-back-history'], function () {
        Route::get('/', [StudentController::class, 'index'])->name('home');
        Route::resource('students', StudentController::class)->except([
            'delete',
            'index',
        ]);
        Route::resource('users', UserController::Class)->except(['delete']);
        Route::resource('cohorts', CohortController::class)->except(['delete']);
        Route::resource('evidence', EvidenceController::class)->except([
            'delete',
        ]);
        Route::resource('notes', NoteController::class)->except(['index','delete', 'show']);
        Route::resource('papers', PaperController::class)->except([
            'delete',
            'update',
            'store',
        ]);
        // Return user to home any time a route is not found
        Route::fallback(function () {
            return redirect('/')->with('status', 'Error, Page Not Found');
        });
    });
});

// Dashboard route needs to be kept so this can be re-deployed later.
//  Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
//     return view('dashboard');
//  })->name('dashboard');

Route::get('logout', function () {
    auth()->logout();
    Session()->flush();
    return Redirect::to('/');
})->name('logout');
