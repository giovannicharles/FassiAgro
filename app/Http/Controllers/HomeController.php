<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController
{
    public function index(){
        // dd(env('OPENAI_API_KEY'));
        return view('home.index');
    }
}
