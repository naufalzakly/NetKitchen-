<?php

use App\Http\Controllers\FoodsController;
use Illuminate\Support\Facades\Auth;
  
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationsController;

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
  
Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Auth::routes();
  
Route::controller(FoodsController::class)->prefix('foods')->group(function(){
    Route::get('/', 'index')->name('foods');
    Route::get('/tambah', 'tambah')->name('foods.tambah');
    Route::post('/simpan', 'simpan')->name('foods.simpan');
    Route::get('/edit/{id}', 'edit')->name('foods.edit');
    Route::post('/update/{id}', 'update')->name('foods.update');
    Route::get('/hapus/{id}', 'hapus')->name('foods.hapus');

});
Route::controller(ReservationsController::class)->prefix('reservations')->group(function(){
    Route::get('/', 'index')->name('reservations');
    Route::get('/tambah', 'tambah')->name('reservations.tambah');
    Route::post('/simpan', 'simpan')->name('reservations.simpan');
    Route::get('/edit/{id}', 'edit')->name('reservations.edit');
    Route::post('/update/{id}', 'update')->name('reservations.update');
    Route::get('/hapus/{id}', 'hapus')->name('reservations.hapus');

});

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});
 