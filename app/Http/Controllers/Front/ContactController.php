<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $item = Settings::orderBy('created_at', 'DESC')->first();
        return view('front.pages.contact',compact('item'));
    }
}
