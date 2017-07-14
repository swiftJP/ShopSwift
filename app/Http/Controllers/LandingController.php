<?php

namespace App\Http\Controllers;

use App\Waiting;
use Illuminate\Http\Request;

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

        return redirect()->back();
    }
}
