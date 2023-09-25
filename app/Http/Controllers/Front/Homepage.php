<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Cars;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Homepage extends Controller
{
    public function index()
    {
        $item = Settings::orderBy('created_at', 'DESC')->first();
        $cars = Cars::orderBy('created_at', 'DESC')->get();
        return view('front.homepage', compact('item','cars'));
    }

    public function currencyChange(Request $request){
        session::put('currency',$request->currency);
    }





}
