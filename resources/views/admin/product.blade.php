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
                                            <input type="text" name="title" value="Test Pantalon" placeholder="Titulo">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" name="amount" value="1888" placeholder="Precio">
                                        </div>
                                        <div class="col-lg-6">
                                            <select class="select-product" name="type">
                                                <option value="Playera">Playera</option>
                                                <option value="Blusa">Blusa</option>
                                                <option value="Pantalon" selected>Pantalon</option>
                                                <option value="Vestido">Vestido</option>
                                                <option value="Sudadera">Sudadera</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" name="model" value="123d1s3df" placeholder="Modelo">
                                        </div>
                                        <div class="col-lg-6">
                                            <select class="select-product" name="category">
                                                <option value="Mujer">Mujer</option>
                                                <option value="Hombre" selected>Hombre</option>
                                                <option value="Ambos">Ambos</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" name="brand" value="Adidas" placeholder="Marca">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="small">Small
                                                <input type="number" name="small_size" value="4" placeholder="cantidad">
                                            </label>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="medium">Medium
                                                <input type="number" name="medium_size" value="4" placeholder="cantidad">
                                            </label>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="large">Large</label>
                                                <input type="number" name="large_size" value="4" placeholder="cantidad">
                                            </label>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="extra_large">Extra Large</label>
                                            <input type="number" name="extra_large_size" value="" placeholder="cantidad">
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="image">
                                                Imagen
                                                <input type="file"  name="image" id="image">
                                            </label>
                                        </div>
                                        <div class="col-lg-12">
                                            <textarea name="description" placeholder="Describir prenda">test Descripcion</textarea>
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
