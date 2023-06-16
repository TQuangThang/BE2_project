<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function getAllProducts()
    {
        $products = DB::table('products')->paginate(6);
        return view('shop', compact('products'));
    }
    public function getProductByCate($id_category)
    {
        $products = DB::table('products')->join('categories', 'products.id_category', '=', 'categories.id')->where('id_category', $id_category)->paginate(5);
        return view('shop', compact('products'));
    }
}
