@extends('Pages.layouts.base-admin')

@section('contenido')

    <div class="container-fluid pl-0">
        <div class="row">
            <div class="col-md-2">
                @include('Pages.includes.nav-admin')
            </div>
            <div class="col-md-10">
                <div class="section-title">
                    <h2>Agregar Producto</h2>
                </div>
                @if(session()->has('flash'))
                <div class="alert alert-success">
                    {{ session('flash')}}
                </div>
                @endif
                <div class="d-flex justify-content-center  ">
                    <div class="card" style="width: 38rem;">
                        <div class="customer-review-option m-5">
                            <div class="leave-comment">
                                <h4>Detalles</h4>
                                <form action="{{ route('admin.product.store')}}" enctype="multipart/form-data" method="post" name="productForm" class="comment-form">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="text" name="title" placeholder="Titulo">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" name="amount" placeholder="Precio">
                                        </div>
                                        <div class="col-lg-6">
                                            <select class="select-product" name="type">
                                                <option value="Playera">Playera</option>
                                                <option value="Blusa">Blusa</option>
                                                <option value="Pantalon">Pantalon</option>
                                                <option value="Vestido">Vestido</option>
                                                <option value="Sudadera">Sudadera</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" name="model" placeholder="Modelo">
                                        </div>
                                        <div class="col-lg-6">
                                            <select class="select-product" name="category">
                                                <option value="Mujer">Mujer</option>
                                                <option value="Hombre">Hombre</option>
                                                <option value="Ambos">Ambos</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" name="brand" placeholder="Marca">
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="filter-widget">
                                                <h4 class="fw-title">Tallas</h4>
                                                <div class="fw-brand-check">
                                                    <div class="bc-item">
                                                        @foreach ($size as $item )
                                                            <label for="{{$item->name}}">
                                                                {{$item->name}}
                                                                <input type="checkbox" value="{{$item->id}}" name="size[]" id="{{$item->name}}">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                            <input type="number" name="quantity[]" placeholder="Cantidad">
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            {{-- <div class="filter-widget">
                                                <h4 class="fw-title">Color</h4>
                                                <div class="fw-brand-check">
                                                    <div class="bc-item">
                                                        @foreach ($color as $item)
                                                        <label for="{{$item->name}}">
                                                            {{$item->name}}
                                                            <input type="checkbox" value="{{$item->id}}" name="color[]" id="{{$item->name}}">
                                                            <span class="checkmark"></span>
                                                        </label>&nbsp;&nbsp;&nbsp;&nbsp;
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="image">
                                                Imagen
                                                <input type="file"  name="image" id="image" required>
                                            </label>
                                        </div>
                                        <div class="col-lg-12">
                                            <textarea name="description" placeholder="Describir prenda"></textarea>
                                            <button type="submit" class="site-btn">Publicar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- </div> --}}

@endsection

{{-- @push('js-script')
    <script src="{{asset('js/cart.js')}}"></script>
@endpush --}}
