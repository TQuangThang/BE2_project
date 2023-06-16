<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function goHome()
    {
        return view('home');
    }
    public function goShop()
    {
        return view('shop');
    }
    public function goShopByCategory()
    {
        return view('shopbycategory');
    }
    public function getProductsForHome()
    {
        $newarrival = DB::table('products')->orderBy('created_at', 'asc')->limit(4)->get();
        $bestseller = DB::table('products')->orderBy('sold', 'desc')->limit(4)->get();
        return view('home', compact('newarrival', 'bestseller'));
        
    }
}
