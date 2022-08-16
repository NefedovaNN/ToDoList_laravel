<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Personal', 'prefix' => 'personal'], function(){
    Route::group(['namespace' => 'Main', 'prefix' => 'main'], function(){
        Route::get('/', 'IndexController')->name('personal.main.index');
    });
    Route::group(['namespace' => 'Task', 'prefix' => 'task'], function(){
        Route::get('/', 'IndexController')->name('personal.task.index');
    });
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function(){
    Route::group(['namespace' => 'Main', 'prefix' => 'main'], function(){
        Route::get('/', 'IndexController')->name('admin.main.index');
    });
    Route::group(['namespace' => 'Task', 'prefix' => 'task'], function(){
        Route::get('/', 'IndexController')->name('admin.task.index');
        Route::get('/create', 'CreateController')->name('admin.task.create');
        Route::post('/', 'StoreController')->name('admin.task.store');
        Route::get('/{task}/edit', 'EditController')->name('admin.task.edit');
        Route::patch('/{task}', 'UpdateController')->name('admin.task.update');
        Route::delete('/{task}', 'DeleteController')->name('admin.task.delete');
    });
    Route::group(['namespace' => 'Category', 'prefix' => 'category'], function(){
        Route::get('/', 'IndexController')->name('admin.category.index');
        Route::get('/create', 'CreateController')->name('admin.category.create');
        Route::post('/', 'StoreController')->name('admin.category.store');
    });
    Route::group(['namespace' => 'Status', 'prefix' => 'status'], function(){
        Route::get('/', 'IndexController')->name('admin.status.index');
        Route::get('/create', 'CreateController')->name('admin.status.create');
        Route::post('/', 'StoreController')->name('admin.status.store');
    });
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
