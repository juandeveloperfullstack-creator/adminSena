@extends('layouts.app')

@section('content')
    <hr class="text-muted opacity-25">

    <h2><strong>Lista de profesores</strong></h2>
    <div class ="container">

    <table id="idaprendice" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>ID-area</th>
                <th>ID-centro-formacion</th>
            </tr>
        </thead>
        <tbody>
            <a href="{{ route('teacher.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nuevo Producto
                </a>
        @foreach($profes as $profe)
        <tr>
            <br>
            <td>{{ $profe->id}}</td>
            <td>{{ $profe->name}}</td>
            <td>{{ $profe->email}}</td>
            <td>{{ $profe->area_id}}</td>
            <td>{{ $profe->training_center_id}}</td>
            <td><a href="{{ route('teacher.show', $profe->id) }}" class="btn btn-success"><i class="bi bi-eye"></i>
            </a>
            <a href="{{ route('teacher.edit', $profe->id) }}" class="btn  btn-warning text-white"><i class="bi bi-pencil"></i></a>
            </td>
            <br>
        </tr>
        @endforeach
        </tbody>
        </table>
        </div>

@endsection
