@extends('Pages.layouts.base')

@section('contenido')

 <!-- Breadcrumb Section Begin -->
 <div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="./home.html"><i class="fa fa-home"></i> Home</a>
                    <a href="./shop.html">Shop</a>
                    <span>Shopping Cart</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Shopping Cart Section Begin -->
<div id="cart-dashboard">
<input type="hidden" ref="storeCard" value="{{route('shopping.store')}}">
<input type="hidden" ref="getCard" value="{{route('shopping.index')}}">
<input type="hidden" ref="countProduct" value="{{route('count.product')}}">
<input type="hidden" ref="sumProduct" value="{{route('sum.product')}}">
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div v-for="items in cart">
                    <div v-for="item in items.data">
                        <div v-for="product in item">
                            <div class="row m-4">
                                <div class="col-3 text-center">
                                    <img :src="'/storage/'+ product.image " width="80" height="100" alt="Imagen de producto">
                                </div>
                                <div class="col-3">
                                    <h6>@{{product.title}}</h6>
                                </div>
                                <div class="col-3">
                                    <h6>@{{product.description}}</h6>
                                </div>
                                <div class="col-3">
                                    <p>$@{{product.amount}}.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-lg-4">

                    </div>
                    <div class="col-lg-4 offset-lg-4">
                        <div class="proceed-checkout">
                            <ul>
                                <li class="subtotal">Subtotal <span>$@{{total}}.00</span></li>
                                <li class="subtotal">IVA <span>$@{{total*.16}}.00</span></li>
                                <li class="cart-total">Total <span>$@{{total*1.16}}.00</span></li>
                            </ul>
                            <a href="#" class="proceed-btn">Pagar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Shopping Cart Section End -->

<!-- Partner Logo Section Begin -->
<div class="partner-logo">
    <div class="container">
        <div class="logo-carousel owl-carousel">
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="img/logo-carousel/logo-1.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="img/logo-carousel/logo-2.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="img/logo-carousel/logo-3.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="img/logo-carousel/logo-4.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="img/logo-carousel/logo-5.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Partner Logo Section End -->


@endsection
@push('js-script')
    <script src="{{asset('js/cart-dashboard.js')}}"></script>
@endpush
