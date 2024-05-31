<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('Register.index',[
            'title'=>'Register'
        ]);
    }

    public function store(Request $request){
        $validateData=$request->validate([
            'name'=>'required|max:255',
            'email'=> 'required|email|unique:users',
            'password'=> 'required|min:5|max:255',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password'=> $request->password
        ]);

        $validateData['password']=Hash::make($validateData['password']);

        $user->assignRole('user');
        event(new Registered($user));

        Auth::login($user);


        return redirect('/Login')->with('Success','Registaration Successfull');
    }
}
