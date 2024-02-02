<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrencyChangeController extends Controller
{
    public function index(){
        // Döviz türünü alın
        $secilenDoviz = session('secilenDoviz', 'azn'); // Varsayılan olarak Azn

        // Döviz türüne göre verileri çekin (örneğin, veritabanından veya başka bir kaynaktan)
        $veriler = []; // Verilerinizi buraya çekin

        return view('homepage', compact('veriler', 'secilenDoviz'));
    }
}
