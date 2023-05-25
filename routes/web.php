<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/akun', function(){
    return view('akun');
});
Route::get('/history', function(){
    return view('list-history.history');
});
Route::get('/mitra', function(){
    return view('list-mitra.mitra');
});
Route::get('/pesanan', function(){
    return view('list-pesanan.pesanan');
});
Route::get('/produk', function(){
    return view('list-produk.produk');
});
Route::get('/toko', function(){
    return view('list-toko.toko');
});
Route::get('/users', function(){
    return view('list-pengguna.users');
});

Route::get('users',[UsersController::class, 'pengguna'])->name('users');
Route::get('dashboard-user', function(){
    return view('user.dashboard');
});
Route::get('dashboard-mitra', function(){
    return view('mitra.dashboard');
});

Route::get('dashboard-superadmin', function(){
    return view('superadmin.dashboard');
});
Route::get('/home', function () {
    if (Auth::check()) {
        if (Auth::user()->user_role == 'Admin') {
            return redirect('dashboard-mitra');
        } elseif (Auth::user()->user_role == 'User') {
            return redirect('dashboard-user');
        } elseif (Auth::user()->user_role == 'SuperAdmin') {
            return redirect('dashboard-superadmin');
        }
    }
    return redirect("/");
})->middleware('auth')->name('home');

Route::middleware(['checkUserRole'])->group(function () {
    Route::view('dashboard-user', 'user.dashboard');
    Route::view('dashboard-mitra', 'mitra.dashboard');
    Route::view('dashboard-superadmin', 'superadmin.dashboard');
});







