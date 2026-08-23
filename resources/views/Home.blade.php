@extends('layouts.app')

@section('content')


<div id="carouselInicio" class="carousel slide carousel-dark shadow-sm rounded overflow-hidden mb-5" data-bs-ride="carousel">
    
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselInicio" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselInicio" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselInicio" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="{{ asset('img/banner1.jpg') }}" class="d-block w-100" style="height: 420px; object-fit: cover;" alt="Banner SENA">
            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 text-white p-4 rounded shadow">
                <h3 class="fw-bold">El SENA es de TODOS</h3>
                <p class="mb-3">Conectamos a las personas con oportunidades laborales, brindando herramientas y orientación.</p>
                <a href="{{ route('course.list') }}" class="btn btn-success fw-bold px-4">Ver Oferta</a>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('img/banner2.jpg') }}" class="d-block w-100" style="height: 420px; object-fit: cover;" alt="Cursos SENA">
            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 text-white p-4 rounded shadow">
                <h3 class="fw-bold">Formación Técnica y Tecnológica</h3>
                <p class="mb-3">Descubre los programas de formación disponibles para potenciar tu perfil profesional.</p>
                <a href="{{ route('course.list') }}" class="btn btn-success fw-bold px-4">Explorar Cursos</a>
            </div>
        </div>

        <div class="carousel-item">
                <img src="{{ asset('img/banner3.jpg') }}" class="d-block w-100" style="height: 420px; object-fit: cover;"
                    alt="Banner 3">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 text-white p-4 rounded shadow">
                    <h2>Centros de Formación</h2>
                    <p>Conoce nuestras instalaciones a nivel nacional.</p>
                    <a href="{{ route('training_center.list') }}" class="btn btn-success fw-bold px-4">Ver Centros</a>
                </div>
            </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselInicio" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselInicio" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>

</div>


<div class="container my-5">
    <div class="row g-4">
        
        <div class="col-md-6">
            <div class="p-4 bg-white rounded-3 shadow-sm h-100 border-start border-4 border-success">
                <h3 class="text-success fw-bold mb-3">QUIÉNES SOMOS</h3>
                <p class="text-secondary leading-relaxed mb-0">
                    Ofrecemos formación gratuita a millones de colombianos que se benefician con programas técnicos, tecnológicos y complementarios enfocados en el desarrollo económico, científico y social del país.
                </p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="p-4 bg-white rounded-3 shadow-sm h-100 border-start border-4 border-success">
                <h3 class="text-success fw-bold mb-3">NUESTRA VISIÓN</h3>
                <p class="text-secondary leading-relaxed mb-0">
                    Ser una entidad referente en formación profesional integral, consolidada como motor de innovación, empleabilidad y transformación social, adaptada a las exigencias globales y tecnológicas del mercado laboral.
                </p>
            </div>
        </div>

    </div>
</div>

@endsection