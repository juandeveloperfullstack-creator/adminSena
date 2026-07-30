@extends('layouts.app')

@section('content')
<div class="container mt-4" style="max-width: 600px;">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Detalle del Centro de formación #{{ $centro->id }}</h5>
        </div>

        {{-- Aquí estaba el detalle: agregamos el 'div' --}}
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label text-muted fw-bold">ID:</label>
                <p class="fs-5">{{ $centro->id }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Nombre del Centro:</label>
                <p class="fs-5">{{ $centro->name }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label text-muted fw-bold">Ubicación:</label>
                <p class="fs-5">{{ $centro->location }}</p>
            </div>
        </div>

        <div class="card-footer text-end">
            <a href="{{ route('training_center.list') }}" class="btn btn-secondary">Regresar a la lista</a>
        </div>
    </div>
</div>
@endsection
