<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index(){
    return view('Login.index',[
        'title'=>'Login'
    ]);
}

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email'=> 'required|email',
            'password'=>'required'
        ]);
        // $request->authenticate();
        // $request->session()->regenerate();
        // $user= Auth::user()

        // if($user->hasRole('admin'));


        if(Auth::attempt($credentials)){
            // $request->authenticate();
            // $request->session()->regenerate();
            // $user= Auth::user();
            // if($user->hasRole('admin'));
            return redirect()->intended('/Dashboard/user');
        }

        return back()->with('loginError','Login Failed');
    }

    public function logout(Request $request){
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
