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

Route::get('/', function () {
    return view('auth/login');
});

//admin
Route::prefix('adminpages')->middleware(['auth', 'isAdmin'])->group(function() {
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
    Route::resource('/addNewBook', App\Http\Controllers\BookController::class);
    Route::get('/editBook/{id}', [App\Http\Controllers\BookController::class, 'edit']);
    Route::Patch('/editBook/{id}', [App\Http\Controllers\BookController::class, 'update']);
    Route::Delete('/admin/{id}', [App\Http\Controllers\BookController::class, 'destroy']);
    Route::get('/peminjamans/pinjamindex', [App\Http\Controllers\LoanController::class, 'index']);
    Route::get('/peminjamans/tambahpinjambuku', [App\Http\Controllers\LoanController::class, 'create']);
    Route::post('/peminjamans/tambahpinjambuku', [App\Http\Controllers\LoanController::class, 'store']);
    Route::Patch('/peminjamans/pinjamindex/{id}', [App\Http\Controllers\LoanController::class, 'update']);
});

\Illuminate\Support\Facades\Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
