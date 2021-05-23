@extends('Pages.layouts.base')

@section('contenido')

<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="{{ route('page.index')}} "><i class="fa fa-home"></i> Inicio</a>
                    <a href="{{ route('page.index')}}">Tienda</a>
                    <span>Detales</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Product Shop Section Begin -->
<section class="product-shop spad page-details">
    <div class="container">
        <div id="shopping-cart">
        <input type="hidden" ref="storeCard" value="{{route('shopping.store')}}">
        <input type="hidden" ref="getCard" value="{{route('shopping.index')}}">
        <div class="d-flex justify-content-center">
            {{-- <div class="col-lg-3">

            </div> --}}
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-6">
                        {{-- <div class="product-pic-zoom"> --}}
                            <img class="product-big-img" src="{{ asset("/storage/{$product->image}")}}" alt="Image-producto-masmoda.com">
                            {{-- <div class="zoom-icon">
                                <i class="fa fa-search-plus"></i>
                            </div> --}}
                        {{-- </div> --}}
                        {{-- <div class="product-thumbs">
                            <div class="product-thumbs-track ps-slider owl-carousel">
                                <div class="pt active" data-imgbigurl="{{ asset("/storage/{$product->image}")}}"><img
                                        src="{{ asset("/storage/{$product->image}")}}" alt=""></div>
                                <div class="pt" data-imgbigurl="{{asset('img/product-single/product-2.jpg')}}"><img
                                        src="{{asset('img/product-single/product-2.jpg')}}" alt=""></div>
                                <div class="pt" data-imgbigurl="{{asset('img/product-single/product-3.jpg')}}"><img
                                        src="{{asset('img/product-single/product-3.jpg')}}" alt=""></div>
                                <div class="pt" data-imgbigurl="{{asset('img/product-single/product-3.jpg')}}"><img
                                        src="{{asset('img/product-single/product-3.jpg')}}" alt=""></div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details">
                            <form method="post" name="shoppingForm" v-on:submit.prevent="addCart">
                                @csrf
                                <div class="pd-title">
                                    <span>oranges</span>
                                    <h3>{{ $product->title }}</h3>
                                    {{-- <a href="#" class="heart-icon"><i class="icon_heart_alt"></i></a> --}}
                                </div>
                                <div class="pd-desc">
                                    <p>{{$product->description}}</p>
                                    {{-- <h4>$495.00 <span>629.99</span></h4> --}}
                                    <h4>${{$product->amount}}.00</h4>
                                </div>
                                {{-- <div class="pd-size-choose w-25">
                                    <p>Color</p>
                                    <select class="select-product" ref="product_color" name="color">
                                        @foreach ($product->colors as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div> --}}
                                <div class="pd-size-choose  w-25">
                                    <p>Talla</p>
                                        <select class="select-product" ref="product_size" name="size">
                                            @foreach ($product->sizes as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                </div>
                                    <div class="quantity">
                                        <input type="hidden" ref="product_id" value="{{$product->id}}">
                                        {{-- <input class="w-25" type="number" v-model="form.quantity"> --}}
                                        <button class="primary-btn pd-cart">Agregar</button>
                                    </div>
                            </form>
                                <ul class="pd-tags">
                                    <li><span>Categoria</span>: {{ $product->category}}</li>
                                </ul>
                                <div class="pd-share">
                                    <div class="p-code">Sku : {{ $product->id}}</div>
                                    <div class="pd-social">
                                        <a href="https://www.facebook.com/"><i class="ti-facebook"></i></a>
                                        <a href="https://twitter.com/?lang=es"><i class="ti-twitter-alt"></i></a>
                                        <a href="https://www.instagram.com/?hl=es-la"><i class="ti-linkedin"></i></a>
                                    </div>
                                </div>
                            {{-- </form> --}}
                        </div>
                    </div>
                </div>
                <div class="product-tab">
                    <div class="tab-item">
                        <ul class="nav" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#tab-1" role="tab">DESCRIPCIÓN</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab-2" role="tab">ESPECIFICACIONES</a>
                            </li>

                        </ul>
                    </div>
                    <div class="tab-item-content">
                        <div class="tab-content">
                            <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                <div class="product-content">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <h5>{{ $product->title }}</h5>
                                            <p>{{$product->description}}</p>
                                        </div>
                                        <div class="col-lg-5">
                                            <img src="{{ asset("/storage/{$product->image}")}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                <div class="specification-table">
                                    <table>
                                        <tr>
                                            <td class="p-catagory">Price</td>
                                            <td>
                                                <div class="p-price">{{$product->amount}}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Disponobles</td>
                                            <td>
                                                <div class="p-stock">{{$product->quantity}}</div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="p-catagory">Talla</td>
                                            <td>
                                                <div class="p-size">
                                                    @foreach ($product->sizes as $item)
                                                    <span> {{$item->name}}</span>
                                                    @endforeach
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Marca</td>
                                            <td>
                                                <div class="p-stock">{{$product->brand}}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Modelo</td>
                                            <td>
                                                <div class="p-code">{{$product->model}}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Sku</td>
                                            <td>
                                                <div class="p-code">{{ $product->id}}</div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
<!-- Product Shop Section End -->

<!-- Related Products Section End -->
<div class="related-products spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Quienes vieron este producto también compraron</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($relations as $item)
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="{{ asset("/storage/{$item->image}")}}" alt="">

                            <ul>
                                <li class="quick-view"><a href="{{route('page.product', ['id' => $item->id] ) }}">+ Detalles</a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">{{$item->category}}</div>
                            <a href="{{route('page.product', ['id' => $item->id] ) }}">
                                <h5>{{$item->title}}</h5>
                            </a>
                            <div class="product-price">
                                ${{$item->amount}}.00
                                {{-- <span>$35.00</span> --}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- 4 productos --}}
        </div>
    </div>
</div>
<!-- Related Products Section End -->

@include('Pages.chunks.banner-brand')

@endsection

@push('js-lib')
    <script src="{{asset('js/shopping-cart.js')}}"></script>
@endpush
