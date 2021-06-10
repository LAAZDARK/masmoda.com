<div class="nav-side-menu">
    <div class="brand">masmoda.com</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

        <div class="menu-list">

            <ul id="menu-content" class="menu-content collapse out">
                <li>
                    <a href="{{ route('admin.home')}}">
                        <i class="fas fa-tachometer-alt fa-lg"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.product')}}">
                        <i class="fas fa-barcode fa-lg"></i> Agregar Producto
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.user.views')}}">
                        <i class="fa fa-users fa-lg"></i> Usuarios
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.register')}}">
                        <i class="fas fa-user-tie fa-lg"></i> Agregar Administrador
                    </a>
                </li>
                {{-- TODO: lista de administradores --}}
                <li>
                    <a href="{{ route('admin.views')}}">
                        <i class="fas fa-user-shield fa-lg"></i> Lista de Administradores
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.logout')}}">
                        <i class="fas fa-sign-out-alt fa-lg"></i> Cerrar sesion
                    </a>
                </li>
            </ul>
        </div>
    {{-- </div> --}}
</div>
