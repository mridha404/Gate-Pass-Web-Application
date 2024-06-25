<?php

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;

// //login routes

// Route::get('/login', [SessionController::class, 'create']);   //the login page
// Route::post('/login', [SessionController::class, 'store']);   //login logic to login super admin
// //Route::delete('/logout', [SessionController::class, 'destroy']);   //for logging out

// //register routes

// Route::get('/register', [RegisteredUserController::class, 'create']);   //
// Route::post('/register', [RegisteredUserController::class, 'store']);   //



// Route::resource('users', RegisteredUserController::class)->except(['show']);     //resource route



// // Department routes
// Route::get('/departments/create', [DepartmentController::class, 'create'])->name('departments.create');
// Route::post('/departments', [DepartmentController::class, 'store'])->name('departments.store');

// // Designation routes
// Route::get('/designations/create', [DesignationController::class, 'create'])->name('designations.create');
// Route::post('/designations', [DesignationController::class, 'store'])->name('designations.store');




// Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth')->name('logout');


Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);

// Protected routes (require authentication and Super Admin status)
Route::middleware(['auth'])->group(function () {
    // User routes
    Route::resource('users', RegisteredUserController::class)->except(['show']);

    // Register routes
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);

    // Department routes
    Route::get('/departments/create', [DepartmentController::class, 'create'])->name('departments.create');
    Route::post('/departments', [DepartmentController::class, 'store'])->name('departments.store');

    // Designation routes
    Route::get('/designations/create', [DesignationController::class, 'create'])->name('designations.create');
    Route::post('/designations', [DesignationController::class, 'store'])->name('designations.store');
});

// Logout route (requires only authentication)
Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth')->name('logout');


Route::get('/app', function () {
    return view('users.app');
});
