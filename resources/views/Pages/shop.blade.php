@extends('Pages.layouts.base')

@section('contenido')

<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="{{ route('page.index')}}"><i class="fa fa-home"></i> Inicio</a>
                    <span>Tienda</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Product Shop Section Begin -->
<section class="product-shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                <div class="filter-widget">
                    <h4 class="fw-title">Categorias</h4>
                    <ul class="filter-catagories">
                        <li><a href="{{ route('page.shop.caballero')}}">Caballero</a></li>
                        <li><a href="{{ route('page.shop.dama')}}">Dama</a></li>
                    </ul>
                </div>
                {{-- <div class="filter-widget">
                    <h4 class="fw-title">Categorias</h4>
                    <div class="select-option">
                        <select class="sorting">
                            <option value="">Precio más alto</option>
                            <option value="">Precio más bajo</option>
                        </select>
                        <select class="sorting">
                            <option value="">Más vendidos</option>
                            <option value="">Nuevos</option>
                        </select>
                    </div>
                </div> --}}
                {{-- <div class="filter-widget">

                </div> --}}
                {{-- <div class="filter-widget">
                    <h4 class="fw-title">Marcas</h4>
                    <div class="fw-brand-check">
                        <div class="bc-item">
                            <label for="bc-calvin">
                                Calvin Klein
                                <input type="checkbox" id="bc-calvin">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-diesel">
                                Diesel
                                <input type="checkbox" id="bc-diesel">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-polo">
                                Polo
                                <input type="checkbox" id="bc-polo">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-tommy">
                                Tommy Hilfiger
                                <input type="checkbox" id="bc-tommy">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="filter-widget">
                    <h4 class="fw-title">Price</h4>
                    <div class="filter-range-wrap">
                        <div class="range-slider">
                            <div class="price-input">
                                <input type="text" id="minamount">
                                <input type="text" id="maxamount">
                            </div>
                        </div>
                        <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                            data-min="33" data-max="98">
                            <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                        </div>
                    </div>
                    <a href="#" class="filter-btn">Filter</a>
                </div> --}}
                {{-- <div class="filter-widget">
                    <h4 class="fw-title">Talla</h4>
                    <div class="fw-size-choose">
                        <div class="sc-item">
                            <input type="radio" id="s-size">
                            <label for="s-size">
                            <a href="{{ route('page.shop.small')}}">S</a>
                            </label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="m-size">
                            <label for="m-size">m</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="l-size">
                            <label for="l-size">l</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="xs-size">
                            <label for="xs-size">xs</label>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="col-lg-9 order-1 order-lg-2">
                <div class="product-show-option">
                    <div class="row">
                        <div class="col-lg-7 col-md-7">
                            <div class="text-center mt-0">
                                <div class="list-filter">
                                  <button class="active" data-toggle="portfilter" data-target="all" >Todos</button>
                                  @foreach($brands as $item)
                                  <button data-toggle="portfilter" data-target="{{$item->brand}}">{{$item->brand}}</button>
                                  @endforeach
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-5 col-md-5 text-right">
                            <p>10 resultados</p>
                        </div> --}}
                    </div>
                </div>
                {{-- card-bootstrap --}}
                <div class="row margin-top-50">
                    <div class="card-deck">
                    @foreach($product as $item)
                    <div class="col-sm-4 mt-4" data-tag="{{$item->brand}}">
                        <div class="card" style="height:450px">
                        <a href="{{route('page.product', ['id' => $item->id] ) }}">
                            <img class="w-100" src="{{ asset("/storage/{$item->image}")}}" alt="image product">
                            {{-- <img class="card-img-top" src="{{$blog->image}}" alt="Card image blog"> --}}
                        </a>
                        <div class="card-body">
                            <h5 class="card-title mt-0 mb-0"><a style="color:#0f0f0f" href="{{route('page.product', ['id' => $item->id] ) }}">{{$item->title}}</a></h5>
                            <p class="mt-0 mb-1">{{$item->brand}} / {{$item->category}}</p>
                            <p style="margin:0px">{!!\Str::limit(strip_tags($item->description), 40,'...')  !!}</p>
                            <p class="card-text"><small class="text-muted">${{$item->amount}}.00</small></p>
                        </div>
                        </div>
                    </div>
                    @endforeach
                    </div> {{--end card-bootstrap --}}
                </div>
                {{-- <div class="product-list">
                    <div class="row">
                        @foreach ($product as $item)
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img class="w-100" src="{{ asset("/storage/{$item->image}")}}" alt="">
                                        <ul>
                                            <li class="quick-view"><a href="{{route('page.product', ['id' => $item->id] ) }}">+ Detalles</a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name" data-tag="{{$item->brand}}">{{$item->category}} / {{$item->brand}}</div>
                                        <a href="{{route('page.product', ['id' => $item->id] ) }}">
                                            <h5>{{$item->title}}</h5>
                                        </a>
                                        <div class="product-price">
                                            ${{$item->amount}}.00 --}}
                                            {{-- <span> ${{$item->amount}}.00</span> --}}
                                        {{-- </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div> --}}
                {{-- <div class="loading-more">
                    <i class="icon_loading"></i>
                    <a href="#">
                        Loading More
                    </a>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<!-- Product Shop Section End -->

@include('Pages.chunks.banner-brand')


@endsection
@push('js-script')
    <script src="{{asset('js/filter-shop.js')}}"></script>
@endpush
