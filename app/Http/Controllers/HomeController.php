<?php

namespace App\Http\Controllers;

use App\Mail\mymail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function mail(Request $request) {

        $order = array(
            "user"=> Auth::user()->name,
            "delivery_items" => $request->input('delivery_items'),
            "delivery_address" => $request->input('delivery_address'),
            "delivery_time" => $request->input('delivery_time'),
            "phone"=> Auth::user()->phone
        );

        Nexmo::message()->send([
            'to' => '447972149992',
            'from' => 'ShopSwift Delivery',
            'text' => $order
        ]);

        Session::put('delivery_items', $request->input('delivery_items'));
        Session::put('delivery_address', $request->input('delivery_address'));
        Session::put('delivery_time', $request->input('delivery_time'));
        return view('checkout.checkout');
    }
}



/*
 *
        Mail::to('jordan@shopswift.co.uk')->queue(new \App\Mail\mymail($request->input('delivery_items'), $request->input('delivery_address'), $request->input('delivery_time')));
 */
