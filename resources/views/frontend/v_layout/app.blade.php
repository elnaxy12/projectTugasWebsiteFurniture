<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Furnish')</title>
    @vite(['resources/js/main.js', 'resources/css/app.css'])
</head>

<body>
    @include('frontend.v_layout.navbar')

    <main>
        @yield("content")
    </main>

    @include('frontend.v_layout.footer')
</body>

</html>