<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function baned(){
        return view('content.error.baned');
    }
}
