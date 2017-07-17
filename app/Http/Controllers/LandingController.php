<?php

namespace App\Http\Controllers;

use App\Waiting;
use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class LandingController extends Controller
{
    public function addToList(Request $request)
    {
        //Store User Input
        $email=$request->input('email');

        //Create new model with input parameters
        $waiting = new Waiting;
        $waiting->email=$email;

        //Save into Database
        $waiting->save();

        //Text alert
        Nexmo::message()->send([
            'to' => '447972149992',
            'from' => 'ShopSwift Subscribe',
            'text' => 'New subscriber: '.$email
        ]);

        return redirect()->back();
    }
}
