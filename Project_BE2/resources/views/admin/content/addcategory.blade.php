@EXTENDS('admin.main')
@section('content')
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h3 class="card-header text-center">ADD CATEGORY</h3>
                    <div class="card-body">
                        <form action="{{ route('customcategory.custom') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Name Category" id="cate_name" class="form-control" name="cate_name" required autofocus>
                                @if ($errors->has('cate_name'))
                                <span class="text-danger">{{ $errors->first('cate_name') }}</span>
                                @endif
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">ADD CATEGORY</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection