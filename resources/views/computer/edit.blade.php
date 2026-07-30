@extends('layouts.app')

@section('content')

<div class="container mt-4" style="max-width: 600px;">
    <div class="card shadow-sm">
        <div class="card-header bg-warning text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Editar Computador #{{ $compu->id }}</h5>
        </div>

        <div class="card-body">
            <form action="{{ route('computer.update', $compu->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Numero del computador:</label>
                    <input type="number" name="number" id="number" class="form-control" value="{{ old('number', $compu->number) }}" required>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Marca:</label>
                    <input type="text" name="brand" id="brand" class="form-control" value="{{ old('brand', $compu->brand) }}" required>
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
