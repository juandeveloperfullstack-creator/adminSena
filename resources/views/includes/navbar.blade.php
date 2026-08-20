<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">


        <a class="navbar-brand d-flex align-items-center fw-bold" href="/">
            <img src="{{ asset('img/logo-sena.png') }}" alt="Logo SENA" width="40" height="40" class="me-2">AdminSena</a>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center me-3">
                <li class="nav-item">
                    <a class="navbar-brand" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('area.list') }}">Áreas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('training_center.list') }}">Centros de Formación</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('computer.list') }}">Computadores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('teacher.list') }}">Profesores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('course.list') }}">Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('aprendice.list') }}">Aprendices</a>
                </li>
            </ul>


            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Buscar" />
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>

    </div>
</nav>
