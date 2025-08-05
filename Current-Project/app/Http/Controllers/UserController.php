<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function login(){
        return view('auth_user/login');
    }

    public function register(){
        return view('auth_user/register');
    }

    public function reg_user(){


        $user = new User();
        $name = request('name');
        $password = request('password');
        $email = request('email');

        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->save();
        Auth::login($user);

        return redirect('/login')->with('success', 'User registered successfully!');

    }
    public function logout($id){
        $user = User::find($id);
        Auth::logout($user);

        return redirect('/login');
    }

    public function authenticateUser(){


        

        if(Auth::attempt(request(['email','password']))){
            return redirect('/')->with('success', 'Login Sucess');
        }
        
        return redirect('/login')->with('error', 'Login Failed! Please check your credentials.');
    }
}
