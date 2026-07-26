@extends('layouts.app')

@section('content')

<div class="container mt-4" style="max-width: 600px;">
    <div class="card shadow-sm">
        <div class="card-header bg-warning text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Editar Área #{{ $area->id }}</h5>
        </div>

        <div class="card-body">
            <form action="{{ route('area.update', $area->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Nombre del Área:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $area->name) }}" required>
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('area.list') }}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
