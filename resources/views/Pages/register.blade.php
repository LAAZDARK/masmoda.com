@extends('Pages.layouts.base')

@section('contenido')

<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="{{ route('page.index')}}"><i class="fa fa-home"></i> Inicio</a>
                    <span>Registro</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Form Section Begin -->

<!-- Register Section Begin -->
<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="register-form">
                    <h2>Registro</h2>
                    <form action="{{ route('register')}}" method="post" name="registerFrom">
                        @csrf
                        <div class="group-input">
                            <label for="name">Nombre *</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="group-input">
                            <label for="email">Correo electrómico *</label>
                            <input type="text" id="email" name="email" required>
                        </div>
                        <div class="group-input">
                            <label for="address">Direccion de envio *</label>
                            <input type="text" id="address" name="address" required>
                        </div>
                        <div class="group-input">
                            <label for="password">Contraseña *</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <div class="group-input">
                            <label for="password_confirmation">Confirmar contraseña *</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" required>
                        </div>
                        <button type="submit" class="site-btn register-btn">Registar</button>
                    </form>
                    <div class="switch-login">
                        <a href="{{ route('page.login')}}" class="or-login">Iniciar sesion</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Form Section End -->

@include('Pages.chunks.banner-brand')

@endsection
