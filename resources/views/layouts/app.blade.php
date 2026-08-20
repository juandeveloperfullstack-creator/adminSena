<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminSena</title>
    @include('includes.dependencias')
</head>

<body class="d-flex flex-column min-vh-100" style="background-color: #eef7f2;">

    @include('includes.navbar')

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <main class="flex-fill container my-5">
        @yield('content')
    </main>

    @include('includes.footer')

    @include('includes.dependenciasbody')

</body>
</html>
