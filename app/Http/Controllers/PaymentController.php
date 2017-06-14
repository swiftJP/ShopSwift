<?php

namespace App\Http\Controllers;

use App\Mail\mymail;
use Illuminate\Http\Request;
use League\Flysystem\Exception;
use Stripe\Charge;
use Stripe\Stripe;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Auth;
use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Session;

class PaymentController extends Controller
{
    public function postCheckout(Request $request)
    {

    }

    public function StripePayment (Request $request) {
        \Stripe\Stripe::setapikey('sk_test_fSIx3RsWOsbIr52tlmYFWxio');
        $token = $request->stripeToken;
        $id = $request->stripeEmail;

        //Creating the customer:
        $customer = \Stripe\Customer::create(array(
            "source" => $token,
            "description" => "ShopSwift Delivery",
            "email" => $id
        ));

        return view('layouts.confirmation');
    }



}

/*// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey("sk_test_fSIx3RsWOsbIr52tlmYFWxio");



// Charge the user's card:
$charge = \Stripe\Charge::create(array(
  "amount" => 1000,
  "currency" => "gbp",
  "description" => "Example charge",
  "source" => $token,
));
Stripe::setapikey('sk_test_fSIx3RsWOsbIr52tlmYFWxio');

//Creating the charge:
        $charge = \Stripe\Charge::create(array(
            "amount" => 495,
            "currency" => "gbp",
            "customer" => $customer->id
        ));

*/
