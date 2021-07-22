@extends('Pages.layouts.base')

@section('contenido')

 <!-- Breadcrumb Section Begin -->
 <div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="{{ route('page.index')}}"><i class="fa fa-home"></i> Inicio</a>
                    <a href="{{ route('page.shop.all')}}">Tienda</a>
                    <span>Pagar</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Shopping Cart Section Begin -->
<div id="checkout">
<input type="hidden" ref="getCard" value="{{route('shopping.index')}}">
<input type="hidden" ref="countProduct" value="{{route('count.product')}}">
<input type="hidden" ref="sumProduct" value="{{route('sum.product')}}">
<input type="hidden" ref="getUser" value="{{route('users.index')}}">
<input type="hidden" ref="postPayment" value="{{route('page.pay.payment')}}">
<section class="checkout-section spad">
    <div class="container">
        <form method="post" name="formPay" action=" {{ route('page.pay.payment') }}" class="checkout-form">
            <div class="row">
                <div class="col-lg-6">
                    <h4>Detalles de facturación</h4>
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="create-item">

                                {{-- <label for="acc-create">
                                    ¿Desea usar los siguientes datos?
                                    <input type="checkbox" id="acc-create">
                                    <span class="checkmark"></span>
                                </label> --}}
                            </div>
                            {{-- <div  v-for="item in user"> --}}
                                <p>Nombre: @{{user.name}}</p>
                                <p>Correo: @{{user.email}}</p>
                                <p>Dirección: @{{user.address}}</p>
                            {{-- </div> --}}
                        </div>
                        {{-- <div class="col-lg-6">
                            <label for="fir">Nombre<span>*</span></label>
                            <input type="text" id="fir">
                        </div>
                        <div class="col-lg-6">
                            <label for="last">Apellido<span>*</span></label>
                            <input type="text" id="last">
                        </div>
                        <div class="col-lg-12">
                            <label for="cun-name">Empresa / Razón Social</label>
                            <input type="text" id="cun-name">
                        </div>
                        <div class="col-lg-12">
                            <label for="cun">País<span>*</span></label>
                            <input type="text" id="cun">
                        </div>
                        <div class="col-lg-12">
                            <label for="town">Estado<span>*</span></label>
                            <input type="text" id="town">
                        </div>
                        <div class="col-lg-12">
                            <label for="street">Calles<span>*</span></label>
                            <input type="text" id="street" class="street-first">
                            <input type="text">
                        </div>
                        <div class="col-lg-12">
                            <label for="zip">Codigo postal</label>
                            <input type="text" id="zip">
                        </div>

                        <div class="col-lg-6">
                            <label for="email">Correo eléctronico<span>*</span></label>
                            <input type="text" id="email">
                        </div>
                        <div class="col-lg-6">
                            <label for="phone">Telefono<span>*</span></label>
                            <input type="text" id="phone">
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="place-order">
                        <h4>Orden de compra</h4>
                        <div class="order-total">
                            <ul class="order-table">
                                <li>Productos <span>Total</span></li>
                                <div v-for="product in cart">
                                    <li class="fw-normal">@{{product.title}}<span>$@{{product.amount}}.00</span></li>
                                </div>
                                <li class="fw-normal">Subtotal<span>@{{total | formatNumber}}.00</span></li>
                                <li class="fw-normal">IVA<span>$@{{total*.16 | formatNumber }}.00</span></li>
                                <li class="total-price">Total <span>$@{{total*1.16 | formatNumber}}.00</span></li>
                            </ul>
                            {{-- <form method="post" name="formPay" action=" {{ route('page.pay.payment') }}"> --}}
                                @csrf
                                <div>
                                    <input type="hidden" name="total" v-model="total">
                                </div>
                                <div class="order-btn">
                                </div>
                                <button type="submit" class="site-btn place-btn">Realizar pago</button>
                            {{-- </form> --}}
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
</div>
<!-- Shopping Cart Section End -->

@include('Pages.chunks.banner-brand')

@endsection

@push('js-script')
<!-- import JavaScript -->
{{-- <script src="https://unpkg.com/element-ui/lib/index.js"></script> --}}
<script src="{{asset('js/checkout.js')}}"></script>

@endpush
