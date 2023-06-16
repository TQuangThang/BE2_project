<?php

namespace App\Http\Controllers;
use Hash;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductDetailController extends Controller
{

    public function getAllProduct(){
        $products = DB::table('products')->paginate(6);
    }
    /*public function getProductById(){
        $products = DB::table('products')->select('*')->where('id', '1')->get();
        // dd($products);
        return View('detail', compact('products'));
    }*/
    public function getRelatedProducts($id)
    {

        $product = DB::table('products')->where('id', $id)->get();
        $relatedproducts = DB::table('products')->where('id_category', $product[0] -> id_category)->where('id', '<>', $product[0]->id)->limit(4)->get();
        return view('detail', compact('product', 'relatedproducts'));
    }
}
