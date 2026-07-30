@extends('layouts.app')

@section('content')

<div class="container mt-4" style="max-width: 600px;">
    <div class="card shadow-sm">
        <div class="card-header bg-warning text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Editar Curso #{{ $curso->id }}</h5>
        </div>

        <div class="card-body">
            <form action="{{ route('course.update', $curso->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Numero de Curso:</label>
                    <input type="number" name="number" id="number" class="form-control" value="{{ old('number', $curso->course_number) }}" required>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Dia:</label>
                    <input type="text" name="day" id="day" class="form-control" value="{{ old('dia', $curso->day) }}" required>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Area:</label>
                    <input type="text" name="area_id" id="area_id" class="form-control" value="{{ old('area_id', $curso->area_id) }}" required>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Centro de Formación:</label>
                    <input type="text" name="training_center_id" id="training_center_id" class="form-control" value="{{ old('training_center_id', $curso->training_center_id) }}" required>
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('course.list') }}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
