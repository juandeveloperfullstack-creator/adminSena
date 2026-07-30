@extends('layouts.app')

@section('content')

<div class="container mt-4" style="max-width: 600px;">
    <div class="card shadow-sm">
        <div class="card-header bg-warning text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Editar Profesor #{{ $teacher->id }}</h5>
        </div>

        <div class="card-body">
            <form action="{{ route('teacher.update', $teacher->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Nombre del Profesor:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $teacher->name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Correo:</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $teacher->email) }}" required>
                </div>

                <h5>Area:</h5>
                <select name="area_id" class="form-select">
            @foreach ($areas as $area)
                <option value="{{ $area->id }}" {{ $teacher->area_id == $area->id ? 'selected' : '' }}>
                    {{ $area->id }} - {{ $area->name }}
                </option>
            @endforeach
        </select>

        <br>

        <h5>Centro:</h5>
        <select name="training_center_id" class="form-select">
            @foreach ($centros as $centro)
                <option value="{{ $centro->id }}" {{ $teacher->training_center_id == $centro->id ? 'selected' : '' }}>
                    {{ $centro->id }} - {{ $centro->name }}
                </option>
            @endforeach
        </select>

        <br>
        
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('teacher.list') }}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
