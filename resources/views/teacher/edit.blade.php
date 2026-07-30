@extends('layouts.app')

@section('content')

<div class="container mt-4" style="max-width: 600px;">
    <div class="card shadow-sm">
        <div class="card-header bg-warning text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Editar Profesor #{{ $profe->id }}</h5>
        </div>

        <div class="card-body">
            <form action="{{ route('teacher.update', $profe->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Nombre del Profesor:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $profe->name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Correo:</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $profe->email) }}" required>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Area:</label>
                    <input type="text" name="area_id" id="area_id" class="form-control" value="{{ old('area_id', $profe->area_id) }}" required>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Centro de Formación:</label>
                    <input type="text" name="training_center_id" id="training_center_id" class="form-control" value="{{ old('training_center_id', $profe->training_center_id) }}" required>
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('teacher.list') }}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
