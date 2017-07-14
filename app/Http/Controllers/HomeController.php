<?php

namespace App\Http\Controllers;

use App\Mail\mymail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

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
        return redirect('layouts.index');
    }

    public function sendOrder(Request $request) {
        //Check if logged in
        if (Auth::check()){
            $order = array(
                "user"=> Auth::user()->name,
                "delivery_items" => Input::post('delivery_items'),
                "delivery_address" => Input::post('delivery_address'),
                "delivery_time" => Input::post('delivery_time'),
                "phone"=> Auth::user()->phone
            );

            //Send text to JP
            Nexmo::message()->send([
                'to' => '447972149992',
                'from' => 'ShopSwift Delivery',
                'text' => $order
            ]);

            //Send text to SK
            Nexmo::message()->send([
                'to' => '447703579798',
                'from' => 'ShopSwift Delivery',
                'text' => $order
            ]);

            //Create session to save the inputs
            Session::put('delivery_items', $request->input('delivery_items'));
            Session::put('delivery_address', $request->input('delivery_address'));
            Session::put('delivery_time', $request->input('delivery_time'));
            return view('Checkout.Checkout');
        } else {
            return redirect('/login');
        }
    }

    public function customOrder(Request $request) {
        $order = array(
            "user" => Auth::user()->name,
            "store" => Input::post('delivery_store'),
            "delivery_items" => Input::post('delivery_items'),
            "delivery_address" => Input::post('delivery_address'),
            "delivery_time" => Input::post('delivery_time'),
        );
        Nexmo::message()->send([
            'to' => '447703579798',
            'from' => 'ShopSwift Delivery',
            'text' => $order
        ]);

        Session::put('delivery_store', $request->input('delivery_store'));
        Session::put('delivery_items', $request->input('delivery_items'));
        Session::put('delivery_address', $request->input('delivery_address'));
        Session::put('delivery_time', $request->input('delivery_time'));
        return view('Checkout.Checkout');
    }
}