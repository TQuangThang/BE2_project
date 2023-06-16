<!-- Preload -->
<div id="preloder">
        <div class="loader"></div>
    </div>
<!-- End of Preload -->
<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__option">
        <div class="offcanvas__links">
            <a href="{{route('login')}}">{{ __('label.login') }}</a>           
        </div>
        <div class="offcanvas__top__hover">
            <span>{{ __('label.language') }}<i class="arrow_carrot-down"></i></span>
            <ul>
                <li><a class="active" href="{{ route('change-language', 'en') }}">EngLish</a></li>
                <li><a href="{{ route('change-language', 'vi') }}">Tiếng Việt</a></li>
            </ul>
        </div>
    </div>
    <div class="offcanvas__nav__option">
        <a href="#"><img src="{{asset('storage/img/icon/heart.png')}}" alt=""></a>
        <a href="{{ route('show-cart') }}"><img src="{{asset('storage/img/icon/cart.png')}}" alt=""> <span>0</span></a>
        <div class="price">$0</div>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__text">
        <p>{{ __('label.welcome') }}</p>
    </div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="header__top__left">
                        <p>{{ __('label.welcome') }}</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="header__top__right">
                        @guest
                        <div class="header__top__links">
                            <a href="{{route('login')}}">{{ __('label.login') }}</a>
                        </div>
                        <div class="header__top__links">
                            <a href="{{ route('registration') }}">{{ __('label.signup') }}</a>
                        </div>
                        @else
                        <div class="header__top__links">
                            <a href="{{ route('signout') }}">{{ __('label.logout') }}</a>
                        </div>
                        @endguest
                        <div class="header__top__hover">
                            <span>{{ __('label.language') }}<i class="arrow_carrot-down"></i></span>
                            <ul>
                                <li><a href="{{ route('change-language', 'en') }}">EngLish</a></li>
                                <li><a href="{{ route('change-language', 'vi') }}">Tiếng Việt</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <a href="{{route('home')}}"><img src="{{asset('storage/img/logo.png')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                    <form action="{{ route('searchproductuser') }}" method="GET">
            <div CLASS="input-group">
            @csrf
            <input type="text" name="keyword" CLASS="form-control bg-light border-2 small " placeholder="{{ __('label.search') }}" aria-label="Search" aria-describedby="basic-addon2">
            <div CLASS="input-group-append">
            <button CLASS="btn btn-primary" type="submit">
                <i CLASS="fas fa-search fa-sm"></i>
            </button>
                    </div>
                </div>
                    </form>
                        <li class=""><a href="{{route('home')}}">{{ __('label.home') }}</a></li>
                        <li><a href="{{route('shop')}}">{{ __('label.shop') }}</a></li>
                        <li><a href="{{route('shop')}}">{{ __('label.category') }}</a>
                            <ul class="dropdown">
                                @foreach($categories_global as $category)
                                <li><a href="{{route('shop-category', $category->id)}}">{{$category->cate_name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option">
                    <a href="#"><img src="{{asset('storage/img/icon/heart.png')}}" alt=""></a>
                    <a href="{{ route('show-cart') }}"><img src="{{asset('storage/img/icon/cart.png')}}" alt=""> <span>0</span></a>
                    
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
<!-- Header Section End -->