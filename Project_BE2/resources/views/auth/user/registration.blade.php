@EXTENDS('user.main')

@Section('content')
<!-- Section: Design Block -->

<section class="">
    <!-- Jumbotron -->
    <div class="px-4 py-5 px-md-5 text-start text-lg-start" style="background-color: hsl(0, 0%, 96%)">
        <div class="container">
            <div class="row gx-lg-5 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h1 class="my-5 display-3 fw-bold ls-tight">
                        Welcome<br />
                        <span class="text-warning" style="font-size: 40px;">Create your account</span>
                    </h1>
                    <p style="color: hsl(217, 10%, 50.8%)">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Eveniet, itaque accusantium odio, soluta, corrupti aliquam
                        quibusdam tempora at cupiditate quis eum maiores libero
                        veritatis? Dicta facilis sint aliquid ipsum atque?
                    </p>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card">
                        <div class="card-body py-5 px-md-5">
                            <form action="{{route('submit-registration')}}" method="post">
                                @csrf
                                <!-- Username input -->
                                <div class="form-outline" style="margin-Bottom: 20px">
                                    <input placeholder="Username or Email" name="name" type="text" id="form3Example1" class="form-control" required/>
                                    @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input placeholder="Password" type="password" name="password" id="form3Example4" class="form-control" required/>
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <!-- Password Confirm -->
                                <div class="form-outline mb-4">
                                    <input placeholder="Confirm Password" type="password" name="password-confirm" id="form3Example6" class="form-control" required/>
                                    @if ($errors->has('password-confirm'))
                                    <span class="text-danger">{{ $errors->first('password-confirm') }}</span>
                                    @endif
                                </div>
                                <!-- Submit button -->
                                <button type="submit" class="btn btn-warning btn-block mb-4">
                                    Sign up
                                </button>
                                <!-- Other buttons -->
                                <div class="text-center">
                                    <p>or login with:</p>
                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        
                                    </button>
                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <a href=""><i class="fab fa-google"></i></a>
                                        
                                    </button>
                                    </button>
                                </div>
                            </form>
                            <button type="submit" class="btn btn-dark btn-block mb-4">
                                <a href="{{route('login')}}" class="text-white">Already have an account</a>                               
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
@endsection