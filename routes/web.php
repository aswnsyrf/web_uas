<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LoginController;
use App\Models\Category;

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
// ->middleware('auth')


Route::middleware(['auth'])->group(function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    Route::resource('products', ProductController::class)->middleware('auth');

    Route::resource('category', CategoryController::class)->middleware('auth');

    Route::resource('transaksi', TransaksiController::class)->middleware('auth');
});


Route::get('/', [HomepageController::class, 'index'])->name('homepage-index');


Route::get('/aboutme', function () {
    return view('aboutme');
});



Route::get('login', [LoginController::class, 'index'])->name('login'); // Menampilkan formulir login
Route::post('login-post', [LoginController::class, 'authenticate'])->name('login.post'); // Proses autentikasi
Route::post('logout', [LoginController::class, 'logout'])->name('logout'); // Proses logout


// Route::get('/login', function () {
//     return view('login');
// });
