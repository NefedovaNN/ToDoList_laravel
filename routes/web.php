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

Route::group(['namespace' => 'Main', 'prefix' => 'main', 'middleware' => 'auth'], function(){
    Route::get('/', 'IndexController')->name('main.index');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function(){
    Route::group(['namespace' => 'Main', 'prefix' => 'main'], function(){
        Route::get('/', 'IndexController')->name('admin.main.index');
    });
   
    Route::group(['namespace' => 'User', 'prefix' => 'user'], function(){
        Route::get('/', 'IndexController')->name('admin.user.index');
        Route::get('/create', 'CreateController')->name('admin.user.create');
        Route::post('/', 'StoreController')->name('admin.user.store');
        Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
        Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
        Route::delete('/{user}', 'DeleteController')->name('admin.user.delete');
      
    });
    Route::group(['namespace' => 'Category', 'prefix' => 'category'], function(){
        Route::get('/', 'IndexController')->name('admin.category.index');
        Route::get('/create', 'CreateController')->name('admin.category.create');
        Route::post('/', 'StoreController')->name('admin.category.store');
        Route::get('/{category}/edit', 'EditController')->name('admin.category.edit');
        Route::patch('/{category}', 'UpdateController')->name('admin.category.update');
        Route::delete('/{category}', 'DeleteController')->name('admin.category.delete');
    });
    Route::group(['namespace' => 'Status', 'prefix' => 'status'], function(){
        Route::get('/', 'IndexController')->name('admin.status.index');
        Route::get('/create', 'CreateController')->name('admin.status.create');
        Route::post('/', 'StoreController')->name('admin.status.store');
        Route::get('/{status}/edit', 'EditController')->name('admin.status.edit');
        Route::patch('/{status}', 'UpdateController')->name('admin.status.update');
        Route::delete('/{status}', 'DeleteController')->name('admin.status.delete');
    });

   
});

Route::group(['namespace' => 'Task', 'prefix' => 'task', 'middleware' => 'auth'], function(){
    Route::get('/', 'IndexController')->name('task.index');
    Route::get('/create', 'CreateController')->name('task.create');
    Route::post('/', 'StoreController')->name('task.store');
    Route::get('/{task}/edit', 'EditController')->name('task.edit');
    Route::patch('/{task}', 'UpdateController')->name('task.update');
    Route::delete('/{task}', 'DeleteController')->name('task.delete');
});
Route::group(['namespace' => 'Personal', 'prefix' => 'personal', 'middleware' => 'auth'], function(){
    Route::get('/', 'IndexController')->name('personal.index');
    Route::get('/{user}/edit', 'EditController')->name('personal.edit');
    Route::patch('/{user}', 'UpdateController')->name('personal.update');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
