@EXTENDS('admin.main')


@section('content')
<form action="{{ route('searchinvoice') }}" method="GET">
  <div CLASS="input-group">
    @csrf
    <input type="text" name= "keyword" CLASS="form-control bg-light border-2 small " placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
    <div CLASS="input-group-append">
      <button CLASS="btn btn-primary" type="submit">
        <i CLASS="fas fa-search fa-sm"></i>
      </button>
    </div>
  </div>
  </form>
  <!-- DataTales Example -->
  <div CLASS="card shadow mb-12">
    <div CLASS="card-header py-3">
      <h6 CLASS="m-0 font-weight-bold text-primary">INVOICE </h6>
      <h6><a href="{{route('addinvoice')}}" class="btn btn-primary">ADD INVOICE</a></h6>
    </div>
    <div CLASS="card-body">
      <div CLASS="table-responsive">
        <table CLASS="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
          <tr>
              <th>Id User</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Invoice date</th>
              <th>Discount Code</th>
            </tr>
          </thead>

          <tbody>
            @foreach($invoices as $invoice)
            <tr>
              <td>{{$invoice->id_user}}</td>
              <td>{{$invoice->phone_number}}</td>
              <td>{{$invoice->email}}</td>
              <td>{{$invoice->invoice_date}}</td>
              <td>{{$invoice->discount_code}}</td>
              <td>
                <a href="{{route('getdataedtinvoice',$invoice->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{route('deleteinvoice',$invoice->id)}}" class="btn btn-primary">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $invoices->links('admin.custompagination') }}
      </div>
    </div>
  </div>

  @endsection