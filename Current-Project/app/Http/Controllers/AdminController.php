<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class AdminController extends Controller
{
    
    public function index(){
        return view('admin.adminPanel'
        , [
            'products' => Product::all()
        ]);
    }
}
