@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

    {{-- {{ $personals }} --}}
    <div class="container">
        <div class="text-center">
            <a href="{{ route("personal.create") }}"> Crear Personal </a>
        </div>
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <th>#</th>
            <th>NOMBRES</th>
            <th>APELLIDOS</th>
            <th>ESCALAFON</th>
            <th>GRADO</th>
            <th>OPCIONES</th>
        </thead>
        <tbody>
            @foreach($personals as $personal)
            <tr>
                <td>{{  $personal->id }}</td>
                <td>{{ $personal->nombres }}</td>
                <td>{{ $personal->apellidos }}</td>
                <td>{{ $personal->escalafon }}</td>
                <td>{{ $personal->grado->grado }}</td>



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
