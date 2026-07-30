@extends('layouts.app')

@section('content')
    <hr class="text-muted opacity-25">

    <h2><strong>Lista de computadores</strong></h2>
    <div class ="container">

    <table id="idaprendice" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Numero</th>
                <th>Marca</th>
            </tr>
        </thead>
        <tbody>
            <a href="{{ route('computer.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nuevo Producto
                </a>
        @foreach($computadores as $computador)
        <tr>
            <br>
            <td>{{ $computador->id}}</td>
            <td>{{ $computador->number}}</td>
            <td>{{ $computador->brand}}</td>
            <td><a href="{{ route('computer.show', $computador->id) }}" class="btn btn-success"><i class="bi bi-eye"></i>
            </a>
            <a href="{{ route('computer.edit', $computador->id) }}" class="btn  btn-warning text-white"><i class="bi bi-pencil"></i></a>
            </td>
            <br>
        </tr>
        @endforeach
        </tbody>
        </table>
        </div>

@endsection
