<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class HomeController extends Controller
{
    public function index(Request $request){

    $data = Product::where('name','LIKE','%'.$request->search .'%')
    ->when(request('category_id'),function($query){
        $query->whereHas('category',function($query){
            $query->where('id',request('category_id'));
        });
    })
    
    
    ->paginate(8);
    

    
        return view('Runpage',[
            "products" =>$data,
            "categories" => \App\Models\Category::all(),
        ]);
    }


    // $id is Product's object
    public function product_detail(Product $id){
        $product = Product::find($id->id);
        $relatedproduct = Product::where('category_id',$id->category->id)->where('id','!=',$id->id)->inRandomOrder()->take(3)->get();
        $latestproduct = Product::where('id','!=',$id->id)->latest()->take(3)->get();
        return view('ProductDetail', ['product' => $product,
                    'relatedproduct' => $relatedproduct,
                    'latestproduct' => $latestproduct]);
    }
    
}
