@EXTENDS('admin.main')
@section('content')
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h3 class="card-header text-center">ADD PRODUCT</h3>
                    <div class="card-body">
                        <form action="{{ route('registerproduct.custom') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name" required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Description" id="description" class="form-control" name="description" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="ID Color" id="id_color" class="form-control" name="id_color" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Price" id="price" class="form-control" name="price" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="In Stock" id="instock" class="form-control" name="instock" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Sold" id="sold" class="form-control" name="sold" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                                <select placeholder="ID Category" name="id_category" id="id_category" class="form-control custom-select">
                                    <option selected disabled>Select one</option>
                                    
                                    @foreach ($categories as $value)
                                        <option value="{{$value->id}}">{{$value->cate_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <select placeholder="ID Size" name="id_size" id="id_size" class="form-control custom-select">
                                    <option selected disabled>Select one</option>
                                    
                                    @foreach ($size as $value)
                                        <option value="{{$value->id}}">{{$value->size_code}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="photo">Attach a photograph</label>
                                <input type="file" name="photo" id="photo" accept="image/*" class="form-control-file" required>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">ADD PRODUCT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection