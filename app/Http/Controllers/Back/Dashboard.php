<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index(){
//        return "Here is Dashboard Controller index function";
        return  view('back.dashboard');
    }
}
