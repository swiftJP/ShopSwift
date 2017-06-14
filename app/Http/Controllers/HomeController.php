<?php

namespace App\Http\Controllers;

use App\Mail\mymail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

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
        Mail::to('jordan@shopswift.co.uk', 'saif@shopswift.co.uk', 'j.add95@icloud.co.uk')->queue(new \App\Mail\mymail($request->input('delivery_items'), $request->input('delivery_address'), $request->input('delivery_time')));
        Session::put('delivery_items', $request->input('delivery_items'));
        Session::put('delivery_address', $request->input('delivery_address'));
        Session::put('delivery_time', $request->input('delivery_time'));
        return view('checkout.checkout');
    }
}



