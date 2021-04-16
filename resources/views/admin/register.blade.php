@extends('Pages.layouts.base-admin')

@section('contenido')

<div class="container-fluid pl-0">
    <div class="row">
        <div class="col-md-2">
            @include('Pages.includes.nav-admin')
        </div>
        <div class="col-md-10">
            <div id="product-manager">
                <div class="section-title">
                    <h2>Agregar Administrador</h2>
                </div>
                <!-- Register Section Begin -->
                <div class="register-login-section spad">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3">
                                <div class="register-form">
                                    <form action="{{ route('admin.post.register')}}" method="post" name="registerFrom">
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
                                            <label for="password">Contraseña *</label>
                                            <input type="password" id="password" name="password" required>
                                        </div>
                                        <div class="group-input">
                                            <label for="password_confirmation">Confirmar contraseña *</label>
                                            <input type="password" id="password_confirmation" name="password_confirmation" required>
                                        </div>
                                        <button type="submit" class="site-btn register-btn">Registar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Register Form Section End -->
            </div>
        </div>
    </div>
</div>


@endsection
