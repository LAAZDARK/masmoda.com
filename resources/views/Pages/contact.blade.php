@extends('Pages.layouts.base')

@section('contenido')

<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="{{ route('page.index')}}"><i class="fa fa-home"></i> Inicio</a>
                    <span>Contacto</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Contact Section Begin -->
<section class="contact-section spad">
    <div id="contact">
        <input type="hidden" ref="storeContact" value="{{ route('page.contact.store') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="contact-title">
                    <h4>Dudas</h4>
                    <p>Ponte en contacto con nostros, en breve uno de nuestros acesores se pondra en contacto con tigo o puedes visitarnos directamente en tienda.</p>
                </div>
                <div class="contact-widget">
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-location-pin"></i>
                        </div>
                        <div class="ci-text">
                            <span>Dirección:</span>
                            <p> <a style=" color:black; " href="https://www.google.com/maps/place/Facultad+de+Estudios+Superiores+Cuautitl%C3%A1n/@19.6919881,-99.1905188,15z/data=!4m2!3m1!1s0x0:0x13d9c1b986e25ecc?sa=X&ved=2ahUKEwi9hIOerODwAhUFMawKHU3RBaIQ_BIwHnoECFUQBQ" target="_blank" rel="noopener noreferrer">Carr, Cuautitlán - Teoloyucan, San Sebastian Xhala, 54714 Cuautitlán Izcalli</a></p>
                        </div>
                    </div>
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-mobile"></i>
                        </div>
                        <div class="ci-text">
                            <span>Telefono:</span>
                            <p> <a style=" color:black; " href="tel:+525547113677"> 55 4711 3677</a></p>
                        </div>
                    </div>
                    <div class="cw-item">
                        <div class="ci-icon">
                            <i class="ti-email"></i>
                        </div>
                        <div class="ci-text">
                            <span>Correo:</span>
                            <p> <a style=" color:black; " href="mailto:contacto@masmoda.com">contacto@masmoda.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <div class="contact-form">
                    <div class="leave-comment">
                        <h4>Escribenos</h4>
                        <div v-if="send">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>@{{send}}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <p>En breve un nos pondremos en contacto contigo.</p>
                        <form method="POST"  v-on:submit.prevent="store" class="comment-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="name" v-model="form.name" placeholder="Nombre" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" name="email" v-model="form.email" placeholder="Correo electrónico" required>
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Mensaje" name="message" v-model="form.message" required></textarea>
                                    <button type="submit" class="site-btn">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Contact Section End -->

@include('Pages.chunks.banner-brand')

@endsection

@push('js-script')
    <script src="{{asset('js/contact.js')}}"></script>
@endpush
