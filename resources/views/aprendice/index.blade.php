@extends('layouts.app')

@section('content')
    <hr class="text-muted opacity-25">

    <h2><strong>Lista aprendiz</strong></h2>
    <div class ="container">

    <table id="idaprendice" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Numero de celular</th>
                <th>Curso-asignado</th>
                <th>Computador-asignado</th>
            </tr>
        </thead>
        <tbody>
            <a href="{{ route('aprendice.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nuevo Producto
                </a>
        @foreach($aprendices as $aprendice)
        <tr>
            <br>
            <td>{{ $aprendice->id}}</td>
            <td>{{ $aprendice->name}}</td>
            <td>{{ $aprendice->email}}</td>
            <td>{{ $aprendice->cell_number}}</td>
            <td>{{ $aprendice->course_id}}</td>
            <td>{{ $aprendice->computer_id}}</td>

            <br>
        </tr>
        @endforeach
        </tbody>
        </table>
        </div>

@endsection
