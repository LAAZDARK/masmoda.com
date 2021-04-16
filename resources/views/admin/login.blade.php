@extends('Pages.layouts.base-admin')

@section('contenido')


{{-- <div id="auth"> --}}
    {{-- <input type="hidden" ref="postLogin" value="{{route('post.admin.login')}}"> --}}
    <!-- Login Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <p>Si no es administrador inicie sesion en el siguente enlace  <a href="{{ route('page.login')}}">Sesion Usuarios</a></p>
                    <div class="login-form">
                        <h2>Iniciar sesión</h2>
                        <form action="{{route('admin.post.login')}}" method="POST" name="loginFrom" >
                            @csrf
                            <div class="group-input">
                                <label for="email">Correo electrónico *</label>
                                <input type="text" id="email" name="email" required>
                            </div>
                            <div class="group-input">
                                <label for="password">Contraseña *</label>
                                <input type="password" id="password" name="password" required>
                            </div>
                            <button type="submit" class="site-btn login-btn">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Form Section End -->
{{-- </div> --}}
@endsection
