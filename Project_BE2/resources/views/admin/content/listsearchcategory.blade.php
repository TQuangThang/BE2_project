@EXTENDS('admin.main')


@section('content')
<form action="{{ route('searchcategory') }}" method="GET">
  <div CLASS="input-group">
    @csrf
    <input type="text" name="keyword" CLASS="form-control bg-light border-2 small " placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
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
      <h6 CLASS="m-0 font-weight-bold text-primary">CATEGORY </h6>
      <h6><a href="{{route('addcategory')}}" class="btn btn-primary">ADD CATEGORY</a></h6>
    </div>
    <div CLASS="card-body">
      <div CLASS="table-responsive">
        <table CLASS="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>CATEGOY NAME</th>
            </tr>
          </thead>

          <tbody>
            @foreach($categories as $category)
            <tr>
              <td>{{$category->cate_name}}</td>
              <td>
                <a href="{{route('getdataedtcategory',$category->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{route('deletecategory',$category->id)}}" class="btn btn-primary">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $categories->links('admin.custompagination') }}
      </div>
    </div>
  </div>

  @endsection