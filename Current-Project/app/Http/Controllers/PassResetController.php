<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class PassResetController extends Controller
{
    public function email_confirm(){
        return view('auth.email_request');
    }

    public function reset(){
        return view('auth.Reset_pass');
    }
    
    public function update(){

        
        
       
        $email = request('email');
        $user = User::where('email', $email)->first();
        if (!$user) {
            return redirect('/forget-password')->back()->withErrors(['email' => 'Email not found']);
        }
        
        $user->email = $email;
        $user->password =request('password');
        $user->save();
        
        return redirect('/login')->with('success', 'Password updated successfully');
    }
}
