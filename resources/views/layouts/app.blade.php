<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formation_Laravel</title>
    {{-- On fait appelle au fichier minifié par webpack css qui est dans public/css pour le style css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    {{-- On inclu la page navbar créée iciavec @include('partials.navbar') --}}
    @include('partials.navbar')

    {{-- On peut avoir plusieurs @yield('id') chacun un identifiant --}}
    {{-- @yield('content') --}}

    {{-- En utilisant Tailwind CSS on peut centrer le contenu avec mx-auto de Tailwind--}}
    <div class="container mx-auto">
        @yield('content')
    </div>

    {{-- On fait appelle au fichier minifié par webpack js qui est dans public/js pour le JS--}}
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>