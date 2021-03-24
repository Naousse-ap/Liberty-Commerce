<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

Route::get('/Admin', function () {
    if ((Auth::user()-> admin) == 1){
        return view('admin');
    }else {
        return redirect('/home');
    }
});



Route::get('/Home', function () {
    return view('home');
});

Route::post('/Save', 'App\Http\Controllers\CartController@save')->name('Save');
Route::post('/panier/ajouter', 'App\Http\Controllers\CartController@store')-> name('cart.store');
Route::delete('/Panier/{rowId}', 'App\Http\Controllers\CartController@destroy')-> name('cart.destroy');
Route::PATCH('/Panier/{rowId}', 'App\Http\Controllers\CartController@update')-> name('cart.update');
Route::post('/Panier', [App\Http\Controllers\CartController::class, 'save'])->name('Panier');

Route::post('/save', 'App\Http\Controllers\AdminController@save')->name('save');
Route::post('/Admin', [App\Http\Controllers\AdminController::class, 'save'])->name('Admin');

Route::get('/product/{product}', [App\Http\Controllers\ProductController::class, 'see']);
Route::put('/product/{product}', [App\Http\Controllers\ProductController::class, 'see']);
Route::post('/product', 'App\Http\Controllers\ProductController@stock')->name('stock');



Route::get('test', [App\Http\Controllers\CartController::class, 'index'])->name('.index');

Route::get('/password/reset',[App\Http\Controllers\EmailController::class, 'reset']);
Route::post('/password/reset',[App\Http\Controllers\EmailController::class, 'mail']);

Route::get('/Panier', function () {
    return view('cart.index');
});



