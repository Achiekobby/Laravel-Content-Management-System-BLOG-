<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;
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

Auth::routes();

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

    Route::get('/home', [HomeController::class, 'index'])->name('user.index');
    
        // POSTS ROUTES STARTS HERE
    Route::get('/post/create', [PostsController::class, 'create'])->name('post.create');

    Route::post('/post/store', [PostsController::class, 'store'])->name('post.store');
        // POSTS ROUTES ENDS HERE

    // CATEGORY ROUTES STARTS HERE
    Route::get('/create/category', [CategoriesController::class, 'create'])->name('category.create');

    Route::post('/category/store', [CategoriesController::class,'store'])->name('category.store');

    Route::get('/categories', [CategoriesController::class,'index'])->name('categories');

   Route::get('/category/edit/{id}', [CategoriesController::class, 'edit'])->name('category.edit');

    Route::get('/category/delete/{id}', [CategoriesController::class, 'destroy'])->name('category.delete');

    Route::post('/category/update/{id}', [CategoriesController::class, 'update'])->name('category.update');
    // CATEGORY ROUTES ENDS HERE
});