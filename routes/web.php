<?php

use App\Http\Controllers\StaticPagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cms\ArticlesController;
use App\Http\Controllers\Cms\CategoriesController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CategoriesController as CategoriesViewController;
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
    return view('static.index');
});

Route::get('/contacts', [StaticPagesController::class, 'contacts'])->name('contacts');
Route::get('/about', [StaticPagesController::class, 'about'])->name('about');

Route::get('/tasks', [TasksController::class, 'index']);
Route::get('/users', [UsersController::class, 'index']);
Route::get('/categories', [CategoriesViewController::class, 'index']);

Route::resource('/admin/articles', ArticlesController::class);

Route::resource('/admin/categories', CategoriesController::class);