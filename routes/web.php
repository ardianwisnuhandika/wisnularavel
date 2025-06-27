<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomBikeController;
use App\Http\Controllers\ProfileController;

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
    return view('home');
});

Route::get('/custom-bike', function () {
    return view('custom-bike');
});

Route::get('/about', function () {
    return view('about');
});

// Route untuk user (lihat produk saja)
Route::get('/products', [ProductController::class, 'userIndex'])->name('products.user.index');
Route::get('/products/{slug}', [ProductController::class, 'userShow'])->name('products.user.show');

// Route untuk admin (CRUD)
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::resource('products', ProductController::class);
    // Admin Custom Bike Routes
    Route::get('/custom-bikes', [CustomBikeController::class, 'index'])->name('admin.custom-bikes.index');
    Route::get('/custom-bikes/{customBike}', [CustomBikeController::class, 'show'])->name('admin.custom-bikes.show');
    Route::post('/custom-bikes/{customBike}/status', [CustomBikeController::class, 'updateStatus'])->name('admin.custom-bikes.update-status');
});

// Route Auth Manual
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route Test
Route::get('/test-login', function () {
    return view('auth.login');
});

// Custom Bike Routes
Route::get('/custom-bike', [CustomBikeController::class, 'create'])->name('custom-bike.create');
Route::post('/custom-bike', [CustomBikeController::class, 'store'])->name('custom-bike.store');

// Route Profil User
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
