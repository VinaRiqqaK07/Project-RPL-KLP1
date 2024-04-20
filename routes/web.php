<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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

Route::get('/order/checkout', [CustomerController::class, 'checkout']) -> name('/checkout');
Route::get('/order/checkout/payment', [CustomerController::class, 'paymentSuccess']) -> name('/payment');
Route::resource('/order', CustomerController::class);

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
