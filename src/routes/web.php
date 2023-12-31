<?php

use App\Http\Controllers\ReserveController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\RegisterController;

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
    return view('welcome');
});
Route::get('/registration/complete', function () {
    return view('thanks');
})->name('/registration/complete');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/logout', function () {
    auth()->logout();
    return redirect('/login');
})->name('logout');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/mypage', [UserController::class, 'mypage'])->name('mypage');
});
Route::get('/detail/{shop}', [ShopController::class,'detail'])->name('detail');
Route::get('/', [ShopController::class, 'index'])->name('index');
Route::post('/reserve', [ReserveController::class, 'reserve'])->name('reserve');
Route::post('/favorite/{shop}', [FavoriteController::class,'favorite'])->name('favorite');
Route::post('/favorite/delete/{shop}', [FavoriteController::class, 'favoriteDelete'])->name('favorite/delete');
Route::get('/search', [ShopController::class, 'index'])->name('search');
Route::post('/reserve/delete/{shop}', [UserController::class, 'reserveDelete'])->name('reserve/delete');
Route::put('/reserve/update/{shop}',[ReserveController::class,'update'])->name('update');