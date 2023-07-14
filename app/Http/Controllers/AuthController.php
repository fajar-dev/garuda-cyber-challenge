<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function login_action(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $validator = Validator::make($credentials, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if (Auth::attempt($credentials)) {
            return redirect()->intended();
        }
        return redirect()->back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    public function register()
    {
        return view('register');
    }

    public function register_action(Request $request ){

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $register = new User;
        $register->name  = $request->name;
        $register->email  = $request->email;
        $register->password  = Hash::make($request->password);
        $register->remember_token  = Str::random(60);
        $register->save();
        return redirect()->route('login')->with('msg','Registration is successful, please login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }
}
