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
            <td><a href="{{ route('training_center.show', $centro->id) }}" class="btn btn-success"><i class="bi bi-eye"></i>
            </a>
            <a href="{{ route('training_center.edit', $centro->id) }}" class="btn  btn-warning text-white"><i class="bi bi-pencil"></i></a>

            <form action="{{ route('training_center.destroy', $centro->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro que deseas eliminar este centro?')">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>

            </td>
            <br>
        </tr>
        @endforeach
        </tbody>
        </table>
        </div>

@endsection
