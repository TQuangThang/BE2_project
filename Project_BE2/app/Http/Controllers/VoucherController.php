<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

//Unknow
class VoucherController extends Controller
{


    public function addVoucher()
    {
        AdminController::checkPermission();
        return view('admin.content.addvoucher');
    }

    public function customVoucher(Request $request)
    {
        $request->validate([
            'code_voucher' => 'required',
            'createddate' => 'required',
            'expireddate' => 'required',
            'reduce' => 'required',
        ]);
        $createdDate = $request->createddate;
        $newCreatedDate = date("Y-m-d", strtotime($createdDate));
        $expiredDate = $request->expireddate;
        $newExpiredDate = date("Y-m-d", strtotime($expiredDate));
        $voucher = new Voucher($request->all());
        $voucher->createddate = $newCreatedDate;
        $voucher->expireddate = $newExpiredDate;
        $voucher->save();
        return redirect("listvoucher");
    }

    public function createVoucher(array $data)
    {
        return Voucher::create([
            'code_voucher' => $data['code_voucher'],
            'createddate' => $data['createddate'],
            'expireddate' => $data['expireddate'],
            'reduce' => $data['reduce'],
        ]);
    }

    public function getDataEditVoucher($id)
    {
        AdminController::checkPermission();
        $getData = DB::table('vouchers')->select('*')->where('id', $id)->get();
        return view('admin.content.editvoucher')->with('getDataVoucherById', $getData);
    }

    public function updateVoucher(Request $request)
    { 
        $createdDate = $request->createddate;
        $newCreatedDate = date("Y-m-d", strtotime($createdDate));
        $expiredDate = $request->expireddate;
        $newExpiredDate = date("Y-m-d", strtotime($expiredDate));
        $updateData = DB::table('vouchers')->where('id', $request->id)->update([
            'code_voucher' => $request->code_voucher,
            'createddate' => $newCreatedDate,
            'expireddate' => $newExpiredDate,
            'reduce' => $request->reduce,
        ]);
        //Thực hiện chuyển trang
        return redirect('listvoucher');
    }


    public function deleteVoucher($id)
    {
        AdminController::checkPermission();
        $deleteData = DB::table('vouchers')->where('id', '=', $id)->delete();
        return redirect('listvoucher');
    }


    public function listVoucher()
    {
        AdminController::checkPermission();
        $vouchers = DB::table('vouchers')->paginate(4);
        return view('admin.content.listvoucher', compact('vouchers'));
    }

    public function searchVoucher(Request $request)
    {
        $keyword = $request->keyword;
        $vouchers = Voucher::where('code_voucher', 'LIKE', '%' . $keyword . '%')->paginate(4);
        return view('admin.content.listsearchvoucher', compact('vouchers'));
    }
}