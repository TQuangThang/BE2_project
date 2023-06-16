<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Fontawsome -->
    <script src="https://kit.fontawesome.com/a4c0a518b5.js" crossorigin="anonymous"></script>
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('user/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('user/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('user/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('user/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('user/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('user/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('user/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('user/css/style.css')}}" type="text/css">
</head>

<body>
    <div class="px-4 py-5 px-md-5 text-center text-lg-start " >
        <div class="card" style=" align-items:center">
            <div class="card-body py-5 px-md-5">
                <form action="{{route('submit-login')}}" method="post">
                    @csrf
                    <!-- Username input -->
                    <div class="form-outline" style="margin-Bottom: 20px">
                        <input placeholder="Username or Email" name="name" type="text" id="form3Example1" class="form-control" required />
                        @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input placeholder="Password" type="password" name="password" id="form3Example4" class="form-control" required />
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">
                        Login
                    </button>
                    <!-- Other buttons -->
                </form>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->
</body>

</html>