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
<section class="checkout-section spad">
    <div class="container">
        <form action="#" class="checkout-form">
            <div class="row">
                <div class="col-lg-6">
                    <h4>Detalles de facturación</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="create-item">
                                <label for="acc-create">
                                    ¿Desea usar los siguientes datos?
                                    <input type="checkbox" id="acc-create">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-6">
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
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="place-order">
                        <h4>Orden de compra</h4>
                        <div class="order-total">
                            <ul class="order-table">
                                <li>Productos <span>Total</span></li>
                                <li class="fw-normal">Combination x 1 <span>$60.00</span></li>
                                <li class="fw-normal">Combination x 1 <span>$60.00</span></li>
                                <li class="fw-normal">Combination x 1 <span>$120.00</span></li>
                                <li class="fw-normal">Subtotal <span>$240.00</span></li>
                                <li class="total-price">Total <span>$240.00</span></li>
                            </ul>
                            <div class="order-btn">
                                <button type="submit" class="site-btn place-btn">Realizar pago</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Shopping Cart Section End -->

@include('Pages.chunks.banner-brand')

@endsection

@push('js-script')
    <script src="{{asset('js/contact.js')}}"></script>
@endpush
