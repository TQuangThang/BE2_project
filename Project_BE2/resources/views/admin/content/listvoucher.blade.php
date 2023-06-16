@EXTENDS('admin.main')


@section('content')
<form action="{{ route('searchvoucher') }}" method="GET">
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
      <h6 CLASS="m-0 font-weight-bold text-primary">VOUCHER </h6>
      <h6><a href="{{route('addvoucher')}}" class="btn btn-primary">ADD VOUCHER</a></h6>
    </div>
    <div CLASS="card-body">
      <div CLASS="table-responsive">
        <table CLASS="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Code Voucher</th>
              <th>Created Date</th>
              <th>Expired Date</th>
              <th>Reduce</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>
            @foreach($vouchers as $voucher)
            <tr>
              <td>{{$voucher->code_voucher}}</td>
              <td>{{$voucher->createddate}}</td>
              <td>{{$voucher->expireddate}}</td>
              <td>{{$voucher->reduce}}</td>
              <td>
                <a href="{{route('getdataedtvoucher',$voucher->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{route('deletevoucher',$voucher->id)}}" class="btn btn-primary">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $vouchers->links('admin.custompagination') }}
      </div>
    </div>
  </div>

  @endsection