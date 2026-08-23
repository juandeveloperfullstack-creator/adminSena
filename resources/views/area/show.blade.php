@extends('layouts.app')

@section('content')

@component('includes.modal-show', [
    'title' => '    Detalle del Area #' . $area->id,
    'backUrl' => route('area.list')
])

<div class="modal-backdrop-custom d-flex align-items-center justify-content-center">
    <div class="card shadow-lg border-0 rounded-3 my-auto" style="max-width: 500px; width: 100%;">
        <div class="card-header bg-primary text-white py-3">
            <h5 class="mb-0 fw-bold">Detalle del Área #{{ $area->id }}</h5>
        </div>
        <div class="card-body p-4">
            <div class="mb-3">
                <label class="fw-bold text-muted small">ID:</label>
                <p class="fs-5 mb-0">{{ $area->id }}</p>
            </div>
            <div class="mb-3">
                <label class="fw-bold text-muted small">Nombre del Área:</label>
                <p class="fs-5 mb-0">{{ $area->name }}</p>
            </div>
        </div>
        <div class="card-footer bg-light text-end py-3">
            <a href="{{ route('area.list') }}" class="btn btn-secondary px-4">Regresar a la lista</a>
        </div>
    </div>
</div>

    @endcomponent
@endsection