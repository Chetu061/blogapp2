<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontController;

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


//category controller
//Route::get('category/create', function () { //static route
//     return view('back-end.category.create');
// })->name('category.create');
Route::get('category/create',[CategoryController::class,'create'])->name('category.create');//controller route
Route::post('category/store',[CategoryController::class,'store'])->name('category.store');//controller route
Route::get('category/table',[CategoryController::class,'table'])->name('category.table');
Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('category/update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::get('category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
//blog controller

Route::get('blog/create',[BlogController::class,'create'])->name('blog.create');
Route::post('blog/store',[BlogController::class,'store'])->name('blog.store');
Route::get('blog/table',[BlogController::class,'table'])->name('blog.table');
Route::get('blog/edit/{id}',[BlogController::class,'edit'])->name('blog.edit');
Route::post('blogs/update/{id}',[BlogController::class,'update'])->name('blogs.update');
Route::get('blog/delete/{id}',[BlogController::class,'delete'])->name('blog.delete');

//to show image and categoery on that page

Route::get('/',[FrontController::class,'front'])->name('front');