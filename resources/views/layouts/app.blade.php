<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminSena</title>
    @include('includes.dependencias')
</head>
<body>
    
@include('includes.navbar')

    <div class="container mt-5 pb-5">
        @yield('content')
    </div>

    @include('includes.footer')

    @include('includes.dependenciasbody')

</body>
</html>