<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\PrivacyPolicy;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function index(){
        $item = PrivacyPolicy::orderBy('created_at', 'DESC')->first();
        return view('front.pages.privacy',compact('item'));
    }
}
