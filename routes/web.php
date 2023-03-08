<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\BackController;
use App\Http\Controllers\DetailController;
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

Route::get('/',[FrontController::class,'front'])->name('*-/');//first template
Route::get('back',[BackController::class,'back'])->name('back');//repeat for practice

Route::get('detail/{id}',[DetailController::class,'detail'])->name('detail');//second template



Route::get('master',[FrontController::class,'master'])->name('master');//not footer properly[master]

//about,contact

Route:: get('home',[FrontController::class,'home'])->name('home');
Route:: get('about',[FrontController::class,'about'])->name('about');
Route:: get('contact',[FrontController::class,'contact'])->name('contact');
Route:: get('dashboard',[FrontController::class,'dashboard'])->name('dashboard');

//particular category ka record show krne ke liye below route
Route::get('category/{id}',[FrontController::class,'view'])->name('category.view');



