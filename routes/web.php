<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserImportController;
use App\Http\Controllers\User\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('admin');
Route::post('/import', [UserImportController::class, 'import'])->name('import')->middleware('admin');
Route::get('/user', [UserController::class, 'index'])->name('Userhome');
Route::post('/passwordChange', [UserController::class, 'passwordChange'])->name('passwordChange');
Route::get('/testMail', [UserController::class, 'testMail'])->name('testMail');






