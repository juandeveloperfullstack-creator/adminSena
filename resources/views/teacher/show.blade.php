@extends('layouts.app')

@section('content')
<div class="container mt-4" style="max-width: 600px;">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Detalle del Profesor #{{ $profesor->id }}</h5>
        </div>

        <div class="card-body">
            <div class="mb-3">
                <label class="form-label text-muted fw-bold">ID:</label>
                <p class="fs-5">{{ $profesor->id }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Nombre del Profesor:</label>
                <p class="fs-5">{{ $profesor->name }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Correo del Profesor:</label>
                <p class="fs-5">{{ $profesor->email }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Area:</label>
                <p class="fs-5">{{ $profesor->area?->name ?? 'Sin Area' }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Centro de Formación:</label>
                <p class="fs-5">{{ $profesor->trainingCenter?->name ?? 'Sin Centro' }}</p>
            </div>
        </div>

        <div class="card-footer text-end">
            <a href="{{ route('teacher.list') }}" class="btn btn-secondary">Regresar a la lista</a>
        </div>
    </div>
</div>
@endsection
