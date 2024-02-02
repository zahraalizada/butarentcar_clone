<?php

namespace App\Http\Controllers;

use App\Models\User;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('back.auth.login');
    }
    public function register()
    {
        return view('back.auth.register');
    }
    public function getlogin(Request $request, $locale)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(['email' => $request->email, 'password' => $request->password], true)) {
            return redirect(route('admin.dashboard', $locale));
        }

        return redirect(route('admin.login', $locale));
    }
    public function getregister(Request $request,$locale)
    {

        $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|same:password_confirm'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect(route('admin.login',$locale));
    }

    public function logout($locale){
        Auth::logout();
        return redirect(route('admin.login',$locale));
    }
}

