@EXTENDS('admin.main')
@section('content')
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h3 class="card-header text-center">EDIT INVOICE</h3>
                    <div class="card-body">
                        <form action="{{route('editinvoice') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                            <input type="hidden"  id="id" value="{{$getDataInvoiceById[0]->id}}"  name="id" >
                                <input type="text" placeholder="Id User" id="id_user" value="{{$getDataInvoiceById[0]->id_user}}" class="form-control" name="id_user" required autofocus>
                                @if ($errors->has('id_user'))
                                <span class="text-danger">{{ $errors->first('id_user') }}</span>
                                @endif
                            </div> 
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Phone" id="phone_number" value="{{$getDataInvoiceById[0]->phone_number}}" class="form-control" name="phone_number" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email" value="{{$getDataInvoiceById[0]->email}}" class="form-control" name="email" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                                <input type="date" placeholder="Invoice Date" id="invoice_date" value="{{$getDataInvoiceById[0]->invoice_date}}"  name="invoice_date"  required autofocus>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Discount Code" id="discount_code" value="{{$getDataInvoiceById[0]->discount_code}}" class="form-control" name="discount_code" required autofocus>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">EDIT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection