<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminSena</title>
    @include('includes.dependencias')
</head>
<body class="d-flex flex-column min-vh-100">

@include('includes.navbar')

    <main class="flex-fill container my-5">
        @yield('content')
    </main>

    @include('includes.footer')

    @include('includes.dependenciasbody')

</body>
</html>
