<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home () {
    return view('home');
    }
    public function register () {
    return view('register');
    }
    public function welcome (Request $request) {
        // dd($request);
        $firstname=$request->input('firstname');
        $lastname=$request->input('lastname');
    return view('dashboard.welcome',['firstname'=> $firstname, 'lastname'=>$lastname]);
    }
}
