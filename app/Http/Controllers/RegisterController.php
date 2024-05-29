<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
            'telpon'=>'required|max:12',
            'username'=> ['required','min:3','max:255','unique:users'],
            'email'=> 'required|unique:users',
            'password'=> 'required|min:5|max:255',
        ]);
        $user = User::create([
            'telpon'=>$request->telpon,
            'name' => $request->name,
            'username'=> $request->username,
            'email' => $request->email,
            'password'=> $request->password
        ]);

        $validateData['password']=Hash::make($validateData['password']);


        return redirect('/Login')->with('Success','Registaration Successfull');
    }
}
