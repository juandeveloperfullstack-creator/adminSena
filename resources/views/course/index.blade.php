@extends('layouts.app')

@section('content')
    <hr class="text-muted opacity-25">

    <h2><strong>Lista de cursos</strong></h2>
    <div class ="container">

    <table id="idaprendice" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Numero-curso</th>
                <th>Dia</th>
                <th>ID-area</th>
                <th>ID-centro-formacion</th>
            </tr>
        </thead>
        <tbody>
            <a href="{{ route('computer.create') }}" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Nuevo Producto
                </a>
        @foreach($cursos as $curso)
        <tr>
            <br>
            <td>{{ $curso->id}}</td>
            <td>{{ $curso->course_number}}</td>
            <td>{{ $curso->day}}</td>
            <td>{{ $curso->area_id}}</td>
            <td>{{ $curso->training_center_id}}</td>
            <td><a href="{{ route('course.show', $curso->id) }}">Mostrar</a></td>
            <br>
        </tr>
        @endforeach
        </tbody>
        </table>
        </div>

@endsection
