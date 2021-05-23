@extends('Pages.layouts.base')

@section('contenido')

<!-- Hero Section Begin -->
<section class="hero-section">
    <div class="hero-items owl-carousel">
        <div class="single-hero-items set-bg" data-setbg="img/hero-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <span>Caballero</span>
                        <h1>Hot Sale</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore</p>
                        <a href="{{route('page.shop.all')}}" class="primary-btn">Comprar</a>
                    </div>
                </div>
                <div class="off-card">
                    <h2>Sale <span>50%</span></h2>
                </div>
            </div>
        </div>
        <div class="single-hero-items set-bg" data-setbg="img/hero-2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <span>Dama</span>
                        <h1>Hot Sale</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore</p>
                        <a href="{{route('page.shop.all')}}" class="primary-btn">Comprar</a>
                    </div>
                </div>
                <div class="off-card">
                    <h2>Sale <span>50%</span></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Women Banner Section Begin -->
<section class="women-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="product-large set-bg" data-setbg="img/products/women-large.jpg">
                    <h2>Mujeres</h2>
                    <a href=" {{route('page.shop.dama')}} ">Descubre mas</a>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-1">
                <div class="filter-control">
                    <ul>
                        <li class="active">Dama</li>
                    </ul>
                </div>
                <div class="product-slider owl-carousel">
                    @foreach ($relationsWomen as $itemWomen)
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{ asset("/storage/{$itemWomen->image}")}}" alt="">

                                <ul>
                                    <li class="quick-view"><a href="{{route('page.product', ['id' => $itemWomen->id] ) }}">+ Detalles</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">{{$itemWomen->category}}</div>
                                <a href="{{route('page.product', ['id' => $itemWomen->id] ) }}">
                                    <h5>{{$itemWomen->title}}</h5>
                                </a>
                                <div class="product-price">
                                    ${{$itemWomen->amount}}.00
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Women Banner Section End -->


<!-- Man Banner Section Begin -->
<section class="man-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="filter-control">
                    <ul>
                        <li class="active">Caballero</li>
                    </ul>
                </div>
                <div class="product-slider owl-carousel">
                    @foreach ($relationsMen as $itemMen)
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="{{ asset("/storage/{$itemMen->image}")}}" alt="">
                                <ul>
                                    <li class="quick-view"><a href="{{route('page.product', ['id' => $itemMen->id] ) }}">+ Detalles</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">{{$itemMen->category}}</div>
                                <a href="{{route('page.product', ['id' => $itemMen->id] ) }}">
                                    <h5>{{$itemMen->title}}</h5>
                                </a>
                                <div class="product-price">
                                    ${{$itemMen->amount}}.00
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="product-large set-bg m-large" data-setbg="img/products/man-large.jpg">
                    <h2>Hombres</h2>
                    <a href="{{ route('page.shop.caballero')}} ">Descubre mas</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Man Banner Section End -->


@include('Pages.chunks.banner-brand')

@endsection
