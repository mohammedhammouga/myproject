<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UseradminController;
use App\Http\Controllers\SearchController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcom1');
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'redirect'])->name('dashboard');
    Route::get('/profile', [HomeController::class, 'show'])->name('profile.show');
    //TodoAdmin
    Route::get('/task', [TaskController::class, 'index'])->name('task.index');
    Route::post('/task', [TaskController::class, 'store'])->name('task.store');
    Route::delete('/task/{id}', [TaskController::class, 'destroy'])->name('task.destroy'); 
    //bio
    Route::post('/profile/update-bio', [HomeController::class, 'updateBio'])->name('profile.updateBio');
    //all user in admin
    Route::delete('/alluser/{id}', [UseradminController::class, 'destroy'])->name('alluser.destroy');
    Route::get('/alluser', [UseradminController::class, 'index'])->name('admin.alluser.index');

     
    
}); 



//contact
/* Route::get('/messages', [ContactController::class, 'index'])->name('contacts.index');
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');
Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');
 */
Route::get('/messages', [ContactController::class, 'index'])->name('contacts.index');
/* Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');  */// Ajoutez ceci si nécessaire
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');
Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');


Route::get('/doctors', [SearchController::class, 'index'])->name('serch');
Route::get('/search', [SearchController::class, 'search'])->name('search');


Route::get('/profile/{id}', [SearchController::class, 'profile'])->name('profile');










<<<<<<< HEAD

=======
//TodoAdmin
// routes/web.php



Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::middleware('role:Admin')->group(function () {
        Route::get('/admin', function () {
            return 'Admin dashboard';
        });
    });

    Route::middleware('role:Doctor')->group(function () {
        Route::get('/doctor', function () {
            return 'Doctor dashboard';
        });
    });

    Route::middleware('role:Patient')->group(function () {
        Route::get('/patient', function () {
            return 'Patient dashboard';
        });
    });
});
>>>>>>> ec09cf88b0171f7270b5c546365c6f12e7ae33e0


