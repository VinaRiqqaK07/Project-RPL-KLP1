<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;

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


Route::delete('/order/remove/{id}', [CustomerController::class, 'removeFromCart']) -> name('order.remove');
Route::delete('/order/clear', [CustomerController::class, 'clearCart'])->name('order.clear');
Route::get('/order/checkout', [CustomerController::class, 'checkout']) -> name('checkout');
Route::get('/order/{id}', [CustomerController::class, 'detailMenu'])->name('order.detail');
Route::get('/order/checkout/payment', [CustomerController::class, 'paymentSuccess']) -> name('payment');
Route::post('/order/store', [CustomerController::class, 'addToCart'])->name('/order/store');
Route::post('/order/place', [CustomerController::class, 'placeOrder'])->name('order.place');
Route::resource('/order', CustomerController::class);

Route::get('/employee/login', [EmployeeController::class, 'login']);
Route::get('/employee/setting', [EmployeeController::class, 'setting']);

Route::resource('/employee', EmployeeController::class);


Route::get('/dicoba', function () {
    return view('dicoba');
});


Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/order', function () {
    return view('order');
})->name('order');
*/


/*
Route::get('/order/checkout', function () {
    return view('check-out');
})->name('checkout');
*/
