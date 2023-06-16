@EXTENDS('admin.main')
@section('content')
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h3 class="card-header text-center">ADD INVOICE</h3>
                    <div class="card-body">
                        <form action="{{route('custominvoice.custom') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="ID User" id="id_user" class="form-control" name="id_user" required autofocus>
                                @if ($errors->has('id_user'))
                                <span class="text-danger">{{ $errors->first('id_user') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="phone" placeholder="Phone" id="phone_number" name="phone_number" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email" name="email" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                                <input type="date" placeholder="Invoice Date" id="invoice_date" name="invoice_date" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Discount Code" id="discount_code" class="form-control" name="discount_code" required autofocus>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">ADD INVOICE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection