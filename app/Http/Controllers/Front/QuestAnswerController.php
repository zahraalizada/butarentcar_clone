<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\QuestAnswer;
use Illuminate\Http\Request;

class QuestAnswerController extends Controller
{
    public function index(){
        $item = QuestAnswer::orderBy('created_at', 'DESC')->first();
        return view('front.pages.faq',compact('item'));
    }
}
