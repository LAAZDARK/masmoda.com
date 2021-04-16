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
                    <h2>Dashboard</h2>
                </div>

                <input type="hidden" ref="getProduct" value="{{route('admin.product.index')}}">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Imagen</th>
                            <th>Titulo</th>
                            <th>Catagoria</th>
                            <th>Marca</th>
                            <th>Precio</th>
                            <th colspan="2">
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="item in product">
                            <td width="10px">@{{ item.id }}</td>
                            <td><img :src="'/storage/'+ item.image " width="40" height="50" alt="Imagen de producto"></td>
                            <td>@{{ item.title }}</td>
                            <td>@{{ item.category }}</td>
                            <td>@{{ item.brand }}</td>
                            <td>@{{ item.amount }}</td>
                            <td width="10px">
                                <a href="#" class="btn btn-warning btn-sm" v-on:click.prevent="editProduct(item)">Editar</a>
                            </td>
                            <td width="10px">
                                <a href="#" class="btn btn-danger btn-sm" v-on:click.prevent="deleteProduct(item.id)">Eliminar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                @include('admin.edit-product')
            </div>
        </div>
    </div>
</div>

@endsection
@push('js-script')
    <script src="{{asset('js/product.js')}}"></script>
@endpush
