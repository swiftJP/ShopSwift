<?php

namespace App\Http\Controllers;

use App\Mail\mymail;
use Illuminate\Http\Request;
use League\Flysystem\Exception;
use Stripe\Charge;
use Stripe\Stripe;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Nexmo\Laravel\Facade\Nexmo;
use Session;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function __construct() {
        $this->middleware('LaunchRedirect');
    }

    public function postCheckout(Request $request)
    {

    }

    public function StripePayment (Request $request) {
        \Stripe\Stripe::setapikey('sk_live_aNWvTGjxhq5b2dG43DvagJr3');
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

