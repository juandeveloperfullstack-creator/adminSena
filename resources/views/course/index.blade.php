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
            <a href="{{ route('course.create') }}" class="btn btn-success">
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
            <td><a href="{{ route('course.show', $curso->id) }}" class="btn btn-success"><i class="bi bi-eye"></i>
            </a>
            <a href="{{ route('course.edit', $curso->id) }}" class="btn  btn-warning text-white"><i class="bi bi-pencil"></i></a>

            <form action="{{ route('course.destroy', $curso->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro que deseas eliminar este curso?')">
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
