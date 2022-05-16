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


Route::get('/cart', function () {
    return view('cart');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/welcome', function () {
    return view('main');
});

Route::get('/user_profile', function () {
    return view('user_profile');
});

Route::get('/view_product', function () {
    return view('view_product');
});


Route::get('/', function () {
    return view('form');
});

Route::get('/status', function () {
    return view('status');
});

// Route::get('/', function () {
//     return view('index');
// });



Route::get('/admin', function () {
    return view('admin/admin');
});

Route::get('/admin_login', function () {
    return view('admin/login');
});

Route::get('/profile', function () {
    return view('admin/profile');
});
    
Route::get('/sales_history', function () {
    return view('admin/sales_history');
});

// input folder under 'views'
Route::get('/edit_product', function () {
    return view('input/edit_product');
});

Route::get('/edit_profile', function () {
    return view('input/edit_profile');
});
Route::get('/contacts', function () {
    return view('admin/contacts');
});
Route::get('/messages', function () {
    return view('admin/messages');
});
