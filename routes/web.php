<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoryController;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;


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
Route::get('/', [TesController::class, 'Index']);
Route::get('/category',[CategoryController::class, 'index']) -> name('category.index');
Route::get('/category/drink',[CategoryController::class, 'drink']) -> name('category.drink');
Route::get('/category/food',[CategoryController::class, 'food']) -> name('category.food');

// Route::get('/post/create',[PostController::class, 'create']) -> name('post.create');
// Route::post('/post/store', [PostController::class, 'store']) -> name('post.store');

Route::get('/', function () {
    return view('welcome');
});
Route::get(uri:'/home', action: function(){
    return view(view:'home.index');
})->name(name:'home.index');

// Route::get(uri:'/product', action: function(){
//     return view(view:'product.index');
// })->name(name:'product.index');
Auth::routes();

Route::get('/product',[ProductsController::class,'index'])->name('product.index');
Route::get('/product/create',[ProductsController::class,'create'])->name('product.create');
Route::post('/product/store',[ProductsController::class,'store'])->name('product.store');
Route::get('/product/edit/{id}',[ProductsController::class,'edit'])->name('product.edit');
Route::put('/product/update/{id}',[ProductsController::class,'update'])->name('product.update');
Route::post('/product/destroy/{id}',[ProductsController::class,'destroy'])->name('product.destroy');

Route::get('/profile', function(){
    
})->middleware(Authenticate::class);

