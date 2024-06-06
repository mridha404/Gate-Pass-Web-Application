<?php

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::middleware(['auth'])->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store']);
    Route::get('/register', [RegisteredUserController::class, 'userList'])->name('users.list');


    // Route::get('/users', [UserController::class, 'index'])->name('users.index');
    // Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    // Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    // Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

    Route::resource('users', UserController::class);

});



Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy'])->name('logout');




// Route::middleware(['auth', 'superadmin'])->group(function () {
//     Route::resource('users', \App\Http\Controllers\UserController::class);

// });
