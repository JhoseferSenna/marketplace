<?php

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
})->name('home');
Route::get('/model', function () {
    //$products = \App\Product::all();
    $user = new \App\User();
    $user->name = 'Usuario teste';
    $user->email = 'email@teste.com';
    $user->password = bcrypt('12345678');
    return \App\User::all();
});

Route::group(['middleware'=>['auth']], function(){
    Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function(){
        Route::resource('stores', 'StoreController');
        Route::resource('products', 'ProductController');
        Route::resource('categories', 'CategoryController');
    });
});
Auth::routes();
