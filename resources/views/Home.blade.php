@extends('layouts.app')

@section('content')

    <div id="carouselInicio" class="carousel slide carousel-dark" data-bs-ride="carousel">


        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselInicio" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselInicio" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselInicio" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="{{ asset('img/banner1.jpg') }}" class="d-block w-100" style="height: 450px; object-fit: cover;"
                    alt="Banner 1">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 p-3 rounded">
                    <h2>El SENA es de TODOS</h2>
                    <p>Conectar a las personas con oportunidades laborales, brindando herramientas y orientación.</p>
                    <a href="#" class="btn btn-success">Ver más</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('img/banner2.jpg') }}" class="d-block w-100" style="height: 450px; object-fit: cover;"
                    alt="Banner 2">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 p-3 rounded">
                    <h2>Cursos y Formación</h2>
                    <p>Descubre toda nuestra oferta académica disponible.</p>
                    <a href="{{ route('course.list') }}" class="btn btn-success">Explorar Cursos</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('img/banner3.jpg') }}" class="d-block w-100" style="height: 450px; object-fit: cover;"
                    alt="Banner 3">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 p-3 rounded">
                    <h2>Centros de Formación</h2>
                    <p>Conoce nuestras instalaciones a nivel nacional.</p>
                    <a href="{{ route('training_center.list') }}" class="btn btn-success">Ver Centros</a>
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
        <div class="p-4 rounded-3 shadow-sm bg-white border-start border-4 border-success">
        <h2><strong>QUIÉNES SOMOS</strong></h2>
        <p class="text-muted">Ofrecemos formación gratuita a millones de colombianos que se benefician con programas
            técnicos, tecnológicos y complementarios que enfocados en el desarrollo económico, científico y social del país,
            entran a fortalecer las actividades productivas de las empresas y de la industria, para obtener mejor
            competitividad y mayores resultados en los diferentes mercados.

            Autorizada por el Estado para invertir en infraestructura necesaria para mejorar el desarrollo social y técnico
            de los trabajadores en las diferentes regiones, a través de formación profesional integral que logra
            incorporarse con las metas del Gobierno Nacional, mediante el cubrimiento de las necesidades específicas de
            recurso humano en las empresas. Por medio de la vinculación al mercado laboral -bien sea como empleado o
            subempleado-, con grandes oportunidades para el desarrollo empresarial, comunitario y tecnológico.

            La Entidad más querida por los colombianos funciona desde su creación en permanente alianza entre el Gobierno,
            los empresarios y los trabajadores, con el firme propósito de aumentar la capacidad de progreso en Colombia a
            través del incremento de la productividad en las empresas y regiones, sin dejar de lado la inclusión social,
            alineados con la política nacional: Más empleo y menos pobreza. Por tal razón, se generan continuamente
            programas y proyectos de responsabilidad social, empresarial, formación, innovación, internacionalización y
            transferencia de conocimientos y tecnologías.</p>
            </div>
    </div>
@endsection
