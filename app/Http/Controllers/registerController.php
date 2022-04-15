<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validateName;

class registerController extends Controller
{
    public function index()
    {
        return view('register');
    }


    public function check(Request $request)
    {
        $data = $request->all();
        dd($data);
    }
}
