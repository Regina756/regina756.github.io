<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class checkoutcontroller extends Controller
{
    public function checkout(){
        return view('checkoutpage.checkout');
    }
}
