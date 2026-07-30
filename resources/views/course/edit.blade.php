@extends('layouts.app')

@section('content')

<div class="container mt-4" style="max-width: 600px;">
    <div class="card shadow-sm">
        <div class="card-header bg-warning text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Editar Curso #{{ $course->id }}</h5>
        </div>

        <div class="card-body">
            <form action="{{ route('course.update', $course->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Numero de Curso:</label>
                    <input type="number" name="number" id="number" class="form-control" value="{{ old('number', $course->course_number) }}" required>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Dia:</label>
                    <input type="text" name="day" id="day" class="form-control" value="{{ old('dia', $course->day) }}" required>
                </div>

                <h5>Area:</h5>
                <select name="area_id" class="form-select">
            @foreach ($areas as $area)
                <option value="{{ $area->id }}" {{ $course->area_id == $area->id ? 'selected' : '' }}>
                    {{ $area->id }} - {{ $area->name }}
                </option>
            @endforeach
        </select>

        <h5>Centro:</h5>
        <select name="training_center_id" class="form-select">
            @foreach ($centros as $centro)
                <option value="{{ $centro->id }}" {{ $course->training_center_id == $centro->id ? 'selected' : '' }}>
                    {{ $centro->id }} - {{ $centro->name }}
                </option>
            @endforeach
        </select>

                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('course.list') }}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
