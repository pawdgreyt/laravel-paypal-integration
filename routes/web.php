<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

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
    return view('paypal.index');
});

Route::controller(PaymentController::class)
->prefix('paypal')
->group(function () {
    Route::view('payment', 'paypal.index')->name('create.payment');
    Route::post('handle-payment', 'handlePayment')->name('make.payment');
    Route::get('cancel-payment', 'paymentCancel')->name('cancel.payment');
    Route::get('payment-success', 'paymentSuccess')->name('success.payment');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
