@extends('layouts.app')

@section('content')
    <hr class="text-muted opacity-25">

    <h2><strong>Lista de profesores</strong></h2>
    <div class ="container">

    <table id="idtraining_center" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Ubicacion</th>
            </tr>
        </thead>
        <tbody>
            <a href="{{ route('training_center.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nuevo Producto
                </a>
        @foreach($centros as $centro)
        <tr>
            <br>
            <td>{{ $centro->id}}</td>
            <td>{{ $centro->name}}</td>
            <td>{{ $centro->location}}</td>
            <td><a href="{{ route('training_center.show', $centro->id) }}">Mostrar</a></td>
            <br>
        </tr>
        @endforeach
        </tbody>
        </table>
        </div>

@endsection
