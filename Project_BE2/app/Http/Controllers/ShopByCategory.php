<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ShopByCategoryController extends Controller
{
    public function getAllProducts()
    {
        $products = DB::table('products')->select('*')->where('id_category', $id)->get();
        return view('shopbycategory', compact('products'));
    }
    
}
    