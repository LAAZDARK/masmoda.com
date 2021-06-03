<body>

    <!-- Page Preloder -->
    {{-- <div id="preloder">
        <div class="loader"></div>
    </div> --}}

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="inner-header">

                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="{{ route('page.index')}}">
                                <img width="150px" src="{{ asset('img/masmoda.com-Logo.png')}}" alt="masmoda-logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">Todo</button>
                            <div class="input-group">
                                <input type="text" placeholder="¿Que necesitas?">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                    @if(Auth::check())
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <div id="cart">
                            <li class="cart-icon">
                                <a href="{{ route('page.dashboard')}}">
                                    <i class="icon_bag_alt"></i>
                                    <span></span>
                                    <span>@{{count}}</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">

                                        <input type="hidden" ref="storeCard" value="{{route('shopping.store')}}">
                                        <input type="hidden" ref="getCard" value="{{route('shopping.index')}}">
                                        <input type="hidden" ref="countProduct" value="{{route('count.product')}}">
                                        <input type="hidden" ref="sumProduct" value="{{route('sum.product')}}">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <div v-for="items in cart">
                                                        <div v-for="item in items.data">
                                                            <div v-for="product in item">
                                                                <div class="row m-2">
                                                                    <div class="col-4">
                                                                        <img :src="'/storage/'+ product.image "  width="50" height="60" alt="Imagen de producto">
                                                                    </div>
                                                                    <div class="col-8">
                                                                        <h6>@{{product.title}}</h6>
                                                                        <p>$@{{product.amount}}.00</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>$@{{total}}.00</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="{{ route('page.dashboard')}}" class="primary-btn view-card">Ir a la cesta</a>
                                        <a href="{{ route('page.dashboard')}}" class="primary-btn checkout-btn">Pagar</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-price">$@{{total}}.00</li>
                            </div>
                        </ul>
                    </div>
                    @endif
                </div>
                {{-- </div> --}}
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="{{ route('page.index')}}">Inicio</a></li>
                        <li><a href="{{ route('page.shop.dama')}}">Dama</a></li>
                        <li><a href="{{ route('page.shop.caballero')}}">Caballero</a></li>
                        <li><a href="{{ route('page.contact')}}">Contacto</a></li>
                        @if (Auth::check())
                        <li><a href="{{ route('page.dashboard')}}">Dashboard</a></li>
                        <li><a href="{{ route('logout')}}">Cerrar sesion</a></li>
                        @else
                        <li><a href="{{ route('page.login')}}">Inicio de sesion</a></li>
                        <li><a href="{{ route('page.register')}}">Registrar</a></li>
                        @endif

                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
{{-- </div> --}}
    <!-- Header End -->

{{-- @push('js-script')
    <script src="{{asset('js/cart.js')}}"></script>
@endpush --}}
