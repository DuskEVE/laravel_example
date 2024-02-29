<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class testController extends Controller
{
    public function hello(){
        return view('hello');
    }
}
