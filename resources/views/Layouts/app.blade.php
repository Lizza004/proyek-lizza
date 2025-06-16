<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="widht=device-widht, initial-scale=1.0"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    @vite('resources/css/app.css')
</head>

<body>
    @include('partials.header')


    @yield('content')    

    @include('partials.footer')
</body>
</html>