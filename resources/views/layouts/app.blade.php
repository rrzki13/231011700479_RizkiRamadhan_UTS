<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Commerce Landing - Iki</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
</head>

<body class="bg-light">

    @include('layouts.navbar')

    @yield('content')

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
