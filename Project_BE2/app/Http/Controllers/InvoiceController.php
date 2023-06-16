<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Models\Invoice;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AdminController;

class InvoiceController extends Controller
{
    
    public function addInvoice()
    {
        AdminController::checkPermission();
        return view('admin.content.addinvoice');
    }

    public function customInvoice(Request $request)
    {
        $request->validate([
            'id_user' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'invoice_date' => 'required',
            'discount_code' => 'required',
        ]);
        $invoiceDate = $request->invoice_date;
        $newInvoiceDate = date("Y-m-d", strtotime($invoiceDate));
        $invoice = new Invoice($request->all());
        $invoice->invoice_date = $newInvoiceDate;
        $invoice->save();
        return redirect("listinvoice");
    }

    public function createInvoice(array $data)
    {
        return Invoice::create([
            'id_user' => $data['id_user'],
            'phone_number' => $data['phone_number'],
            'email' => $data['email'],
            'invoice_date' => $data['invoice_date'],
            'discount_code' => $data['discount_code'],
        ]);
    }

    public function getDataEditInvoice($id)
    {
        AdminController::checkPermission();
        $getData = DB::table('invoices')->select('*')->where('id', $id)->get();
        return view('admin.content.editinvoice')->with('getDataInvoiceById', $getData);
    }

    public function updateInvoice(Request $request)
    { 
        $invoiceDate = $request->invoice_date;
        $newInvoiceDate = date("Y-m-d", strtotime($invoiceDate));
        $updateData = DB::table('invoices')->where('id', $request->id)->update([
            'id_user' => $request->id_user,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'invoice_date' => $newInvoiceDate,
            'discount_code' => $request->discount_code,
        ]);
        return redirect('listinvoice');
    }


    public function deleteInvoice($id)
    {
        AdminController::checkPermission();
        $deleteData = DB::table('invoices')->where('id', '=', $id)->delete();
        return redirect('listinvoice');
    }


    public function listInvoice()
    {
        AdminController::checkPermission();
        $invoices = DB::table('invoices')->paginate(4);
        return view('admin.content.listinvoice', compact('invoices'));
    }

    public function searchInvoice(Request $request)
    {
        $keyword = $request->keyword;
        $invoices = Invoice::where('id_user', 'LIKE', '%' . $keyword . '%')->paginate(4);
        return view('admin.content.listsearchinvoice', compact('invoices'));
    }
}
