@extends('layouts.app')

@section('content')

<div class="container mt-4" style="max-width: 600px;">
    <div class="card shadow-sm">
        <div class="card-header bg-warning text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Editar Aprendiz #{{ $aprendiz->id }}</h5>
        </div>

        <div class="card-body">
            <form action="{{ route('aprendice.update', $aprendiz->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Nombre del aprendiz:</label>
                    <input type="name" name="name" id="name" class="form-control" value="{{ old('name', $aprendiz->name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Correo:</label>
                    <input type="eamil" name="eamil" id="email" class="form-control" value="{{ old('email', $aprendiz->email) }}" required>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Numero de celular:</label>
                    <input type="number" name="cell_number" id="cell_number" class="form-control" value="{{ old('cell_number', $aprendiz->cell_number) }}" required>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Curso:</label>
                    <input type="text" name="course_id" id="course_id" class="form-control" value="{{ old('course_id', $aprendiz->course_id) }}" required>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Computador:</label>
                    <input type="text" name="computer_id" id="computer_id" class="form-control" value="{{ old('computer_id', $aprendiz->computer_id) }}" required>
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('computer.list') }}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
