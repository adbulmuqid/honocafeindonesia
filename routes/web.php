<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\HomeController;


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
// Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login-proses', [loginController::class, 'login_proses'])->name('login-proses');
Route::get('/logout', [loginController::class, 'logout'])->name('logout');


// Admin
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');


Route::get('/akunuser', [AdminController::class, 'akunuser'])->name('akunuser');
Route::get('/createakunuser', [AdminController::class, 'create'])->name('akunuser.create');
Route::post('/akunuser', [AdminController::class, 'store'])->name('akunuser.store');
Route::get('/admin/editakunuser/{id}', [AdminController::class, 'editakunuser'])->name('admin.editakunuser');
Route::put('/updateakunuser/{id}', [AdminController::class, 'updateakunuser'])->name('updateakunuser');
Route::delete('/deleteakunuser/{id}', [AdminController::class, 'delete'])->name('akunuser.delete');

Route::get('/produk', [ProdukController::class, 'produk'])->name('produk');
Route::get('/createproduk', [ProdukController::class, 'create'])->name('produk.create');
Route::post('/produkstore', [ProdukController::class, 'store'])->name('produk.store');
Route::get('/admin/editproduk/{id}', [ProdukController::class, 'editproduk'])->name('admin.editproduk');
Route::put('/updateproduk/{id}', [ProdukController::class, 'updateproduk'])->name('updateproduk');
Route::delete('/deleteproduk/{id}', [ProdukController::class, 'delete'])->name('produk.delete');

Route::get('/galery', [GaleryController::class, 'galery'])->name('galery');
Route::get('/creategalery', [GaleryController::class, 'create'])->name('galery.create');
Route::post('/galery', [GaleryController::class, 'store'])->name('galery.store');
Route::get('/admin.editgalery/{id}', [GaleryController::class, 'editgalery'])->name('admin.editgalery');
Route::put('/updategalery/{id}', [GaleryController::class, 'updategalery'])->name('updategalery');
Route::delete('/deletegalery/{id}', [GaleryController::class, 'delete'])->name('galery.delete');


//saran
Route::post('/saran', [HomeController::class, 'saran'])->name('saran');
Route::get('/viewsaran', [AdminController::class, 'viewsaran'])->name('viewsaran');

// User
Route::get('/menu', [HomeController::class, 'menu']);
Route::get('/', [HomeController::class, 'index'])->name('menu');




Route::get('/hubungi', function () {
    return view('hubungiKami');
});

Route::get('/download', function () {
    return view('downloadApps');
});

Route::get('/fullstory', function () {
    return view('fullstory');
});

Route::get('/downloadApps', function () {
    return view('downloadApps');
});
