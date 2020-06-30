<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function regist() 
    {
        return view('register');
    }

    public function welcomes(Request $request)
    {
        return view('/welcomes', [
            'name1' => $request->first_name,
            'name2' => $request->last_name
            ]);
    }
}
