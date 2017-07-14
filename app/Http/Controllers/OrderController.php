<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class OrderController extends Controller
{
    public function __construct() {
        $this->middleware('LaunchRedirect');
    }


    public function customOrder(Request $request) {
        if (Auth::check()){
        $order = array(
            "user" => Auth::user()->name,
            "delivery_store" => $request->input('delivery_store'),
            "delivery_items" => $request->input('delivery_items'),
            "delivery_address" => $request->input('delivery_address'),
            "delivery_time" => $request->input('delivery_time'),
            "phone" => Auth::user()->phone,
        );

        /*Nexmo::message()->send([
            'to' => '447972149992',
            'from' => 'ShopSwift Delivery',
            'text' => $order
        ]);*/

        Session::put('delivery_store', $request->input('delivery_store'));
        Session::put('delivery_items', $request->input('delivery_items'));
        Session::put('delivery_address', $request->input('delivery_address'));
        Session::put('delivery_time', $request->input('delivery_time'));

        return view('Checkout.Checkout');

        } else {
            return redirect('/login');
        }

    }

    public function newOrder(Request $request) {
        if (Auth::check()){

            Session::put('delivery_store', $request->input('delivery_store'));
            Session::put('delivery_items', $request->input('delivery_items'));
            Session::put('delivery_address', $request->input('delivery_address'));
            Session::put('delivery_time', $request->input('delivery_time'));

            $order = array(
                "user" => Auth::user()->name,
                "delivery_store" => $request->input('delivery_store'),
                "delivery_items" => $request->input('delivery_items'),
                "delivery_address" => $request->input('delivery_address'),
                "delivery_time" => $request->input('delivery_time'),
                "phone" => Auth::user()->phone,
            );

            /*Nexmo::message()->send([
                'to' => '447972149992',
                'from' => 'ShopSwift Delivery',
                'text' => $order
            ]);*/

            return view('Checkout.Checkout');

        } else {
            return redirect('/login');
        }
    }
}
