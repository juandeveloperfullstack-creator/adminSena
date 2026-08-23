<nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: #39a900;">
    <div class="container-fluid">
        
        <a class="navbar-brand d-flex align-items-center fw-bold text-white" href="/">
            <img src="{{ asset('img/logo-sena.png') }}" alt="Logo SENA" width="40" height="40" class="me-2">
            AdminSena
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center me-3">
                
                
                <li class="nav-item mx-1">
                    <a class="nav-link px-3 {{ request()->is('/') ? 'active-nav-item' : 'text-white' }}" href="/">
                        Inicio
                    </a>
                </li>

                
                <li class="nav-item mx-1">
                    <a class="nav-link px-3 {{ request()->routeIs('area.*') ? 'active-nav-item' : 'text-white' }}" href="{{ route('area.list') }}">
                        Áreas
                    </a>
                </li>

                
                <li class="nav-item mx-1">
                    <a class="nav-link px-3 {{ request()->routeIs('training_center.*') ? 'active-nav-item' : 'text-white' }}" href="{{ route('training_center.list') }}">
                        Centros de Formación
                    </a>
                </li>

                
                <li class="nav-item mx-1">
                    <a class="nav-link px-3 {{ request()->routeIs('computer.*') ? 'active-nav-item' : 'text-white' }}" href="{{ route('computer.list') }}">
                        Computadores
                    </a>
                </li>

                
                <li class="nav-item mx-1">
                    <a class="nav-link px-3 {{ request()->routeIs('teacher.*') ? 'active-nav-item' : 'text-white' }}" href="{{ route('teacher.list') }}">
                        Profesores
                    </a>
                </li>

                <li class="nav-item mx-1">
                    <a class="nav-link px-3 {{ request()->routeIs('course.*') ? 'active-nav-item' : 'text-white' }}" href="{{ route('course.list') }}">
                        Cursos
                    </a>
                </li>

                <li class="nav-item mx-1">
                    <a class="nav-link px-3 {{ request()->routeIs('aprendice.*') ? 'active-nav-item' : 'text-white' }}" href="{{ route('aprendice.list') }}">
                        Aprendices
                    </a>
                </li>

            </ul>

            
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Buscar">
                <button class="btn btn-outline-light" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>