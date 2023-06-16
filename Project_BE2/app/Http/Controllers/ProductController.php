<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

//Unknow
class ProductController extends Controller
{
    public function registrationProduct()
    {
        AdminController::checkPermission();
        $categories = DB::table('categories')->select('*')->get();
        $size = DB::table('sizes')->select('*')->get();
        return view('admin.content.addproduct', ['categories' => $categories, 'size' => $size]);
    }

    public function customProduct(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'id_color' => 'required',
            'price' => 'required',
            'instock' => 'required',
            'sold' => 'required',
            'id_category' => 'required',
            'photo' => 'required',
            'id_size' => 'required',
        ]);
        $file = $request->file('photo');
        $path = 'uploads';
        $fileName = $file->getClientOriginalName();
        $file->move($path, $fileName);
        $product = new Product($request->all());
        $product->photo = $fileName;
        $product->save();
        return redirect("listproduct");
    }

    public function createProduct(array $data)
    {
        return Product::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'id_color' => $data['id_color'],
            'price' => $data['price'],
            'instock' => $data['instock'],
            'sold' => $data['sold'],
            'id_category' => $data['id_category'],
            'photo' => $data['photo'],
            'id_size' => $data['id_size'],
        ]);
    }

    public function getDataEdit($id)
    {
        AdminController::checkPermission();
        $getData = DB::table('products')->select('*')->where('id', $id)->get();
        $categories = DB::table('categories')->select('*')->get();
        $size = DB::table('sizes')->select('*')->get();
        return view('admin.content.editproduct', ['getDataProductById' => $getData, 'categories' => $categories, 'size' => $size]);
    }

    public function updateProduct(Request $request)
    {
        $file = $request->file('photo');
        $path = 'uploads';
        $fileName = $file->getClientOriginalName();
        $file->move($path, $fileName);

        $updateData = DB::table('products')->where('id', $request->id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'id_color' => $request->id_color,
            'price' => $request->price,
            'instock' => $request->instock,
            'sold' => $request->sold,
            'id_category' => $request->id_category,
            'photo' => $fileName,
            'id_size' => $request->id_size,
        ]);
        //Thực hiện chuyển trang
        return redirect('listproduct');
    }
    public function deleteProduct($id)
    {
        AdminController::checkPermission();
        $deleteData = DB::table('products')->where('id', '=', $id)->delete();
        return redirect('listproduct');
    }


    public function listProduct()
    {
        AdminController::checkPermission();
        $products = DB::table('products')->paginate(4);
        return view('admin.content.listproduct', compact('products'));
    }

    public function searchProduct(Request $request)
    {
        $keyword = $request->keyword;
        $products = Product::where('name', 'LIKE', '%' . $keyword . '%')->paginate(4);
        return view('admin.content.listsearchproduct', compact('products'));
    }
    public function searchProductUser(Request $request)
    {
        $keyword = $request->keyword;
        $products = Product::where('name', 'LIKE', '%' . $keyword . '%')->paginate(4);
        return view('shop', compact('products'));
    }
    public function searchProductByCategory(Request $request)
    {
        $keyword = $request->keyword;
        $products = Product::where('name', 'LIKE', '%' . $keyword . '%')->paginate(4);
        return view('shop', compact('products'));
    }
    public function getProductHot(Request $request)
    {
        $keyword = $request->keyword;
        $products = DB::table('products')->orderBy('sold', 'desc')->paginate(10);
        return view('shophot', compact('products'));
    }
}
