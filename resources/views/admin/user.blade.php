@extends('Pages.layouts.base-admin')

@section('contenido')

<div class="container-fluid pl-0">
    <div class="row">
        <div class="col-md-2">
            @include('Pages.includes.nav-admin')
        </div>
        <div class="col-md-10">
            <div id="user">
                <div class="section-title">
                    <h2>LIsta de usuarios</h2>
                </div>

                <input type="hidden" ref="getUser" value="{{route('admin.user.index')}}">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Genero</th>
                            <th>Dirección</th>
                            <th colspan="2">
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="item in users">
                            <td width="10px">@{{ item.id }}</td>
                            <td>@{{ item.name }}</td>
                            <td>@{{ item.email }}</td>
                            <td>@{{ item.gender }}</td>
                            <td>@{{ item.address }}</td>
                            <td width="10px">
                                <a href="#" class="btn btn-danger btn-sm" v-on:click.prevent="deleteUser(item.id)">Eliminar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
@push('js-script')
    <script src="{{asset('js/user.js')}}"></script>
@endpush
