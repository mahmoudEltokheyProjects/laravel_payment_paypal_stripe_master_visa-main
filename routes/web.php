<?php

use App\Http\Controllers\StripePaymentController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
// +++++++++++++++++++++++++ stripe route +++++++++++++++++++++++++
Route::get('stripe', [StripePaymentController::class,'stripe']);
Route::post('stripe', [StripePaymentController::class,'stripePost'])->name('stripe.post');
