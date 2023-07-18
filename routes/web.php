<?php

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\IndexController as AdminController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\NewsController;
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

/* Lesson 1
Route::get('/hello/{name}', static function (string $name) {
    return "Hello, $name";
});

Route::get('/news/{id}', static function (string $id) {
    return "Hello, $id";
});

Route::get('/about/', function () {
    return 'About us';
});
*/
//Admin
Route::group(['prefix' => 'admin', 'as' => 'admin.' ], static function() {
    Route::get('/', AdminController::class)->name('index');
    Route::resource('/categories', AdminCategoryController::class);
    Route::resource('/news', AdminNewsController::class);
});

//Homepage
Route::get('/homepage', [HelloController::class, 'index']) -> name('hello.index');

//News
Route::get('/news', [NewsController::class, 'index'])
->name('news.index');

Route::get('/news/{id}', [NewsController::class, 'show'])
->where('id', '\d+') //чтобы пользователь видел не ошибки, а 404
->name('news.show');

//Categories
Route::get('/categories', [CategoryController::class, 'index'])
-> name('category.index');

Route::get('/categories/{id}', [CategoryController::class, 'show']) 
-> where('id', '\d+')
-> name('category.show');