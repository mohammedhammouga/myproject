<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UseradminController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AppointmentController;
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

// Authenticated Routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'redirect'])->name('dashboard');
    Route::get('/profile', [HomeController::class, 'show'])->name('profile.show');
    Route::post('/profile/update-bio', [HomeController::class, 'updateBio'])->name('profile.updateBio');

    // Task Routes
    Route::get('/task', [TaskController::class, 'index'])->name('task.index');
    Route::post('/task', [TaskController::class, 'store'])->name('task.store');
    Route::delete('/task/{id}', [TaskController::class, 'destroy'])->name('task.destroy');

    // Admin User Routes
    Route::delete('/alluser/{id}', [UseradminController::class, 'destroy'])->name('alluser.destroy');
    Route::get('/alluser', [UseradminController::class, 'index'])->name('admin.alluser.index');
});

// Contact Routes
Route::get('/messages', [ContactController::class, 'index'])->name('contacts.index');
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');
Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');

// Search Routes
Route::get('/doctors', [SearchController::class, 'index'])->name('serch');
Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/profile/{id}', [SearchController::class, 'profile'])->name('profile');

// Role-Based Dashboard Routes
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

Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');