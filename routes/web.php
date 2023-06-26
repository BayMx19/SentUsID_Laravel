<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProdukController;
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

// Start Route Akun
// Route::get('/akun', [AkunController::class, 'index'])->name('index');

Route::get('/acc', function(){
    return view('info-akun.akun');
});
Route::get('/detailakun/{id}',[AkunController::class, 'edit'])->name('edit');
Route::post('/info-akun/update/{id}', [AkunController::class, 'update']);
// END Route Akun

// Start Route History
Route::middleware('user')->group(function() {
    Route::get('/history', function(){
        return view('list-history.history');
    });
});

// END Route History
// Start Route List Mitra
Route::middleware('superadmin')->group(function() {
    Route::get('/mitra', [MitraController::class, 'index']);
    Route::get('/mitra', [MitraController::class, 'mitra']);

    Route::get('/add-mitra', [MitraController::class, 'addMitra']);
    Route::post('/add-mitra/store', [MitraController::class, 'input']);

    Route::get('/detailmitra/{id_mitra}','App\Http\Controllers\MitraController@edit');
    Route::post('/list-mitra/update/{id}', [MitraController::class, 'update']);

    Route::get('/add-mitra', [MitraController::class, 'getEmail']);
    Route::get('/mitra/delete/{id}', [MitraController::class, 'delete']);
});
    // END Route List Mitra
// Start Route List Pesanan
Route::middleware('admin')->group(function() {
    Route::get('/pesanan', [PesananController::class, 'index']);
    Route::get('/pesanan', [PesananController::class, 'pesanan']);
});
// END Route List Pesanan
// Start Route List Produk
Route::middleware('admin')->group(function() {
    Route::get('/produk', [ProdukController::class, 'index']);
    Route::get('/produk', [ProdukController::class, 'produk']);

    Route::get('/add-produk', [ProdukController::class, 'addProduk']);
    Route::post('/add-produk/store', [ProdukController::class, 'input']);

    Route::get('/detailproduk/{id}','App\Http\Controllers\ProdukController@edit');
    Route::post('/list-produk/update/{id}', [ProdukController::class, 'update']);

    Route::get('/mitra/delete/{id}', [ProdukController::class, 'delete']);
});
// END Route List Produk
// Start Route List Toko
Route::middleware('user')->group(function() {
    Route::get('/toko', function(){
        return view('list-toko.toko');
    });
});

// END Route List Toko
// Start Route List Pengguna
Route::middleware('superadmin')->group(function() {
    Route::get('/users', [UsersController::class, 'index']);
    Route::get('/users', [UsersController::class, 'pengguna']);

    Route::get('/add-users', [UsersController::class, 'addUsers']);
    Route::post('/add-users/store', [UsersController::class, 'input']);

    Route::get('/add-users', [UsersController::class, 'getRoless']);
    // Route::get('/detailusers', [UsersController::class, 'getroless']);

    Route::get('/detailusers/{id}','App\Http\Controllers\UsersController@edit');
    Route::post('/list-pengguna/update/{id}', [UsersController::class, 'update']);
    // Route::get('/list-pengguna/delete/{id}','App\Http\Controllers\UsersController@delete');

    Route::get('/users/delete/{id}', [UsersController::class, 'delete']);
    Route::get('users',[UsersController::class, 'pengguna'])->name('users');
});

// END Route List Pengguna

// Start Route Authentication
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

// END Route Authentication


// SELESAI SEMOGA HARIMU SENIN TERUS, KEJARLAH CITA-CITAMU JANGAN KEJAR YANG GA CINTAIMU