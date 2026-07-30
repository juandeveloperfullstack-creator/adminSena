@extends('layouts.app')

@section('content')

<div class="container mt-4" style="max-width: 600px;">
    <div class="card shadow-sm">
        <div class="card-header bg-warning text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Editar Aprendiz #{{ $aprendice->id }}</h5>
        </div>

        <div class="card-body">
            <form action="{{ route('aprendice.update', $aprendice->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Nombre del aprendiz:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $aprendice->name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Correo:</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $aprendice->email) }}" required>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Numero de celular:</label>
                    <input type="number" name="cell_number" id="cell_number" class="form-control" value="{{ old('cell_number', $aprendice->cell_number) }}" required>
                </div>

                <h5>Curso:</h5>
                <select name="course_id" class="form-select">
            @foreach ($cursos as $curso)
                <option value="{{ $curso->id }}" {{ $aprendice->course_id == $curso->id ? 'selected' : '' }}>
                    {{ $curso->id }} - {{ $curso->course_number }}
                </option>
            @endforeach
        </select>

                <h5>Computador:</h5>
                <select name="computer_id" class="form-select">
            @foreach ($compus as $compu)
                <option value="{{ $compu->id }}" {{ $aprendice->computer_id == $compu->id ? 'selected' : '' }}>
                    {{ $compu->id }} - {{ $compu->number }}
                </option>
            @endforeach
        </select>

        <br>
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('aprendice.list') }}" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </form>
            <br>
        </div>
    </div>
</div>
@endsection
