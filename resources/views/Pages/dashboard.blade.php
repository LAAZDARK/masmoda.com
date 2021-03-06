@extends('Pages.layouts.base')

@section('contenido')

 <!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="{{ route('page.index')}}"><i class="fa fa-home"></i> Inico</a>
                    <a href="{{ route('page.shop.all')}}">Tienda</a>
                    <span>Cesta</span>
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
                {{-- <div v-for="items in cart"> --}}
                    {{-- <div v-for="item in cart"> --}}
                        <div v-for="product in cart">
                            <div class="row m-4">
                                <div class="col-2 text-center">
                                    <img :src="'/storage/'+ product.image " width="80" height="100" alt="Imagen de producto">
                                </div>
                                <div class="col-3">
                                    <h6>@{{product.title}}</h6>
                                </div>
                                <div class="col-3">
                                    <h6>@{{product.description.substring(0, 80)}}</h6>
                                    {{-- <h6>{{  \Str::limit(strip_tags(product.description), 100,'...')  }}</h6> --}}
                                </div>
                                <div class="col-2">
                                    <p>$@{{product.amount}}.00</p>
                                </div>
                                <div class="col-2">
                                    <button class="btn btn-danger btn-sm" v-on:click.prevent="deleteProduct(product.id)">Eliminar</button>
                                </div>
                            </div>
                        </div>
                    {{-- </div> --}}
                {{-- </div> --}}
                <div class="row">
                    <div class="offset-lg-4">

                    </div>
                    <div class="col-lg-4 offset-lg-4">
                        <div class="proceed-checkout">
                            <ul>
                                <li class="subtotal">Subtotal <span>$@{{total | formatNumber}}.00</span></li>
                                <li class="subtotal">IVA <span>$@{{total*.16 | formatNumber }}.00</span></li>
                                <li class="cart-total">Total <span>$@{{total*1.16 | formatNumber}}.00</span></li>
                            </ul>
                            <a href=" {{ route('page.pay.checkout') }}" class="proceed-btn">Pagar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>

<!-- Shopping Cart Section End -->

@include('Pages.chunks.banner-brand')


@endsection
@push('js-script')
    <script src="{{asset('js/cart-dashboard.js')}}"></script>
@endpush
