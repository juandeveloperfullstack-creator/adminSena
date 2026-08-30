@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center py-4">
        <div class="col-md-5 col-lg-4">

            <div class="card shadow border-0 rounded-3 overflow-hidden">

                <!-- Encabezado con Verde SENA -->
                <div class="card-header text-white text-center py-4" style="background-color: #39a900;">
                    <i class="bi bi-person-badge fs-1"></i>
                    <h4 class="mb-0 fw-bold mt-2">AdminSena</h4>
                    <small class="text-white-50">Iniciar Sesión</small>
                </div>

                <!-- Formulario -->
                <div class="card-body p-4 bg-white">
                    <form action="#" method="POST">
                        @csrf

                        <!-- Correo Electrónico -->
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold text-secondary small">
                                Correo Electrónico:
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted border-end-0">
                                    <i class="bi bi-envelope-fill"></i>
                                </span>
                                <input type="email" name="email" id="email" class="form-control border-start-0" placeholder="usuario@sena.edu.co" required autofocus>
                            </div>
                        </div>

                        <!-- Contraseña -->
                        <div class="mb-4">
                            <label for="password" class="form-label fw-semibold text-secondary small">
                                Contraseña:
                            </label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted border-end-0">
                                    <i class="bi bi-lock-fill"></i>
                                </span>
                                <input type="password" name="password" id="password" class="form-control border-start-0" placeholder="••••••••" required>
                            </div>
                        </div>

                        <!-- Botón de Ingreso -->
                        <div class="d-grid pt-2">
                            <button type="submit" class="btn text-white py-2 fw-bold" style="background-color: #39a900;">
                                Iniciar Sesión
                            </button>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection
