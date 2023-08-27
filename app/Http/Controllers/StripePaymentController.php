<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Stripe;

class StripePaymentController extends Controller
{
    // ++++++++++++++++++++ stripe() ++++++++++++++++++++
    public function stripe()
    {
        return view('stripe');
    }
    // ++++++++++++++++++++ stripePost() ++++++++++++++++++++
    public function stripePost(Request $request)
    {
        // ----- Stripe_Secret -----
        Stripe::setApiKey( env('STRIPE_SECRET') );
        Charge::create([
            'amount' => 100*100 ,
            'currency' => 'USD' ,
            // you will take "source" from "client"
            'source' => "tok_mastercard" ,
            'description' => 'Test Payment From Eltokhey'
        ]);
        return redirect()->back()->with('success', 'This is a message success!');

        return view('stripe');
    }
}
