<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="nav-link active" aria-current="page" href="{{ route('area.create') }}">Area</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('training_center.create') }}">TrainingCenter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('computer.create') }}">Computer</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('teacher.create') }}">Teachers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('course.create') }}">Courses</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('aprendice.create') }}">Apprentice</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>