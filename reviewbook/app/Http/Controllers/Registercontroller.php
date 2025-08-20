<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registercontroller extends Controller
{
    public function formdaftar (){
        return view ('page.register');
    }

    public function welcome(Request $request){
        $firstname = $request->input("firstname");
        $lastname = $request->input("lastname");
        $gender = $request->input("gender");
        return view('page.welcome', ['firstname'=>$firstname, 'lastname' =>$lastname]);



    }
}
