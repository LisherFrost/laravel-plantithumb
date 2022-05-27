<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\AdminController;
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


Route::get('/destroy/{id}', [customerController::class,'destroy'])->name('destroy');


Route::resource('products', ProductController::class);
Route::post('/login', [AuthController::class,'login'])->name('login');
Route::post('/adminlogin', [AuthController::class,'adminlogin'])->name('adminlogin');
Route::post('/registeradmin', [AuthController::class,'registeradmin'])->name('registeradmin');
Route::post('/registerUser', [AuthController::class,'register'])->name('registerUser');

Route::get('adminlogout', [AuthController::class,'adminlogout'])->name('adminlogout');
Route::get('logout', [AuthController::class,'logout'])->name('logout');

Route::get('/session', [AuthController::class,'session']);

Route::get('/admin',[AdminController::class, 'adminPage' ]);
Route::get('/profile',[AdminController::class, 'profile' ]);

Route::get('/update_orders/{id}',[AdminController::class, 'update_orders' ])->name('update_orders');

Route::get('/details/{id}',[AdminController::class, 'details' ])->name('details');

Route::get('/edit_profile', [AdminController::class, 'Editprofile' ]);
Route::patch('/update_profile', [AdminController::class, 'update_profile' ])->name('input.update_profile');
Route::patch('/addTocart/{id}', [ProductController::class, 'addTocart' ])->name('addTocart');

Route::get('/updata_status',[customerController::class, 'updata_status' ])->name('updata_status');

Route::get('/view_product/{id}',[ ProductController::class,'viewproduct'] )->name('view_product');

Route::get('/cart',[customerController::class, 'cart' ]);

Route::get('/form', function () {return view('form');});

Route::get('/orders', [AdminController::class, 'orders' ]);
Route::get('/order_c', [customerController::class, 'order_c' ]);

Route::get('/user_profile',[ customerController::class,'user_profile'])->name('user_profile');

Route::get('/update_status/{id}',[ customerController::class,'confirmReceived'] )->name('update_status');

Route::get('/category/{id}',[ customerController::class,'category'] )->name('category');

Route::get('/', function () {return view('form');});
   
Route::get('/sales_history',[ AdminController::class,'sales_history']);
Route::get('/CheckStock',[ ProductController::class,'CheckStock']);
Route::get('/Available',[ ProductController::class,'Available']);

Route::get('/admin_login', function () {return view('admin/login');});


Route::get('/edit_product', function () {return view('input/edit_product');});

//admin messages
Route::get('/contacts',[ AdminController::class,'adminMessage'] );
Route::get('/viewMessage/{id}',[ AdminController::class,'viewMessage'])->name('viewMessage');
Route::post('/sendMessage/{id}',[ AdminController::class,'sendMessage'])->name('sendMessage');

Route::get('/messages', function () {return view('admin/messages');});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
});

Route::get('/search', [ AdminController::class,'search']);

Route::get('/pending', [ customerController::class,'pending'])->name('pending');
Route::get('/Sent', [ customerController::class,'Sent'])->name('Sent');
Route::get('/Purchased', [ customerController::class,'Purchased'])->name('Purchased');





