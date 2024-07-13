@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="container">
        <div class="text-center">
            <a href="{{ route('grado.create') }}"> Crear Grado </a>
        </div>
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <th>N°</th>
            <th>GRADO</th>
            <th>OPCIONES</th>
        </thead>
        <tbody>
            @foreach($grados as $grado)
            <tr>
                <td>{{  $grado->id }}</td>
                <td>{{ $grado->grado }}</td>
                <td>{{ $grado->opciones }}</td>




            <tr>
            @endforeach
        </tbody>

    </table>


    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
