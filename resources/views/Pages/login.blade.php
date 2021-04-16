@extends('Pages.layouts.base')

@section('contenido')


<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="{{ route('page.index')}}"><i class="fa fa-home"></i> Inicio</a>
                    <span>Iniciar sesión</span>
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
                <div class="login-form">
                    <h2>Iniciar sesión</h2>
                    <form action="{{ route('login')}}" method="post" name="loginFrom">
                        @csrf
                        <div class="group-input">
                            <label for="email">Correo electrónico *</label>
                            <input type="text" id="email" name="email" required>
                        </div>
                        <div class="group-input">
                            <label for="password">Contraseña *</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <div class="group-input gi-check">
                            <div class="gi-more">
                                <a href="#" class="forget-pass">Recuperar contraseña</a>
                            </div>
                        </div>
                        <button type="submit" class="site-btn login-btn">Entrar</button>
                    </form>
                    <div class="switch-login">
                        <a href="{{ route('page.register')}}" class="or-login">Crear cuenta</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Form Section End -->

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
<!-- Partner Logo Section End -->


@endsection
