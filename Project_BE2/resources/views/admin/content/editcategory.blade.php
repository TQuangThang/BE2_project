@EXTENDS('admin.main')
@section('content')
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h3 class="card-header text-center">EDIT CATEGORY</h3>
                    <div class="card-body">
                        <form action="{{route('editcategory') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                            <input type="hidden"  id="id" value="{{$getDataCategoryById[0]->id}}"  name="id" >
                                <input type="text" placeholder="Ten category" id="cate_name" value="{{$getDataCategoryById[0]->cate_name}}" class="form-control" name="cate_name" required autofocus>
                                @if ($errors->has('cate_name'))
                                <span class="text-danger">{{ $errors->first('cate_name') }}</span>
                                @endif
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