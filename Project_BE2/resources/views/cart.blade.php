@EXTENDS('user.main')
@Section('content')
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>{{ __('label.cart') }}</h4>
                    <div class="breadcrumb__links">
                        <a href="./index.html">{{ __('label.cart') }}</a>
                        <a href="./shop.html">{{ __('label.store') }}</a>
                        <span>{{ __('label.cart') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="shopping__cart__table">
                    <form action="{{ route('update-cart') }}" method="get">
                        @csrf
                        <table>
                            <thead>
                                <tr>
                                    <th>{{ __('label.product') }}</th>
                                    <th>{{ __('label.quantity') }}</th>
                                    <th>{{ __('label.total') }}</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $total = 0; ?>
                                @foreach($productsInCart as $productInCart)
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <img class="pic__cart__item" src="{{asset('uploads')}}/{{$productInCart->photo}}" alt="">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6>{{$productInCart->name}}
                                            </h6>
                                            <h5>${{$productInCart->price}}</h5>
                                        </div>
                                    </td>
                                    <td class="quantity__item">
                                        <div class="quantity">
                                            <div class="pro-qty-2">
                                                <input type="text" name="quantity" value="{{ $productInCart->quantity }}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__price">${{$productInCart->totalPrice}}</td>
                                    <?php $total = $total +  $productInCart->totalPrice ?>
                                    <td class="cart__close"><a href="{{ route('remove-from-cart', $productInCart->id) }}"><i class="fa fa-close"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </form>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <div class="continue__btn">
                            <a href="{{ route('shop') }}">{{ __('label.continueshop') }}</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-3">
                        <div class="continue__btn update__btn">
                            <button type="submit">
                                <a href="{{ route('update-cart') }}">{{ __('label.update') }}</a>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="continue__btn update__btn">
                            <a href="{{ route('clear-cart') }}"><i class="fa fa-spinner"></i>{{ __('label.clear') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart__discount">
                    <h6>{{ __('label.voucher') }}</h6>
                    <form action="{{route('useVoucher')}}" method="get">
                        <input type="text" name="voucher" placeholder="{{ __('label.voucher') }}">
                        <input type="hidden" name="total" value="{{$total}}" placeholder="Coupon code">
                        <button type="submit">{{ __('label.apply') }}</button>
                    </form>
                </div>
                <div class="cart__total">
                    <h6>{{ __('label.totalcart') }}</h6>
                    <ul>
                        <li>{{ __('label.subtotal') }} <span>$ 0</span></li>
                        <li>{{ __('label.total') }} <span>$ {{$total}}</span></li>
                    </ul>
                    <a href="#" class="primary-btn">{{ __('label.checkout') }}</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shopping Cart Section End -->
@endsection