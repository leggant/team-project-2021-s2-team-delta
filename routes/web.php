<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ {
    StudentController,
    UserController,
    CohortController,
    EvidenceController,
    NoteController,
    PermissionController,
    RoleController,
    PaperController,
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

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', [StudentController::class, 'index'])->name('home');
    Route::resource('students', StudentController::class)->except(['delete', 'index']);
    // wildcard name not needed, it's the default given in the first set of round brackets
    Route::resource('users', UserController::Class);  
    Route::resource('cohorts', CohortController::class);
    Route::resource('evidence', EvidenceController::class);
    Route::resource('notes', NoteController::class);
    Route::resource('papers', PaperController::class)->except(['delete']);
    Route::resource('permissions', PermissionController::class)->except(['update', 'delete']);
    Route::resource('roles', RoleController::class)->except(['update', 'delete']);
    Route::get('/admin-panel', function () {
        return view('admin.admin_panel');
    })->name('admin.admin-panel');
    // Return user to home any time a route is not found
    Route::fallback(function () {
        return redirect('/')->with('status', 'Error, Page Not Found');
    });
});
// Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
//     return view('pages.students');
// })->name('home');

// Dashboard route needs to be kept so this can be re-deployed later.
//  Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
//     return view('dashboard');
//  })->name('dashboard');

Route::get('logout', function () {
    auth()->logout();
    Session()->flush();
    return Redirect::to('/');
})->name('logout');