<?php

use Illuminate\Support\Facades\Route;
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

Route::resource('products', ProductController::class);



Route::get('/', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('home');
});

Route::get('/activity', function () {
    return view('activity');
});

Route::get('/profile', function () {
    return view('profile');
});
    
Route::get('/sales_history', function () {
    return view('sales_history');
});

// input folder under 'views'
Route::get('/edit_product', function () {
    return view('input/edit_product');
});

Route::get('/edit_profile', function () {
    return view('input/edit_profile');
});
Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/messages', function () {
    return view('messages');
});