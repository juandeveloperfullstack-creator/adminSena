@extends('layouts.app')

@section('content')
    <hr class="text-muted opacity-25">

    <h2><strong>Listar area</strong></h2>
    <div class ="container">

    <table id="idarea" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            <a href="{{ route('area.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nuevo Producto
                </a>
        @foreach($areas as $area)
        <tr>
            <br>
            <td>{{ $area->id}}</td>
            <td>{{ $area->name}}</td>
            <td><a href="{{ route('area.show', $area->id) }}" class="btn btn-success"><i class="bi bi-eye"></i>
            </a>
            <a href="{{ route('area.edit', $area->id) }}" class="btn  btn-warning text-white"><i class="bi bi-pencil"></i></a>
            </td>
            <br>
        </tr>
        @endforeach
        </tbody>
        </table>
        </div>

@endsection
