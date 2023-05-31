@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Personas</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <table class="table">
            <thead class="table-light">
                <tr>
                    <th>Nombre</th>
                    <th>Idenficación</th>
                    <th>Celular</th>
                    <th>Correo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($personas as $persona)
                    <tr>
                        <td>{{$persona->nombres}} {{$persona->apellidos}}</td>
                        <td>{{$persona->cedula}}</td>
                        <td>{{$persona->celular}}</td>
                        <td>{{$persona->correo}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@stop