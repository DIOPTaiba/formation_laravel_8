<ul>
    {{-- ces liens font références aux liens des routes dans web.php --}}
    {{-- <li><a href="/">Accueil</a></li>
    <li><a href="/contact">Contact</a></li> --}}

    {{-- On peut aussi utiliser les nom des routes définies dans web.php --}}
    <li><a href="{{ route('welcome') }}">Accueil</a></li>
    <li><a href=" {{ route('contact') }}">Contact</a></li>
    {{-- <li><a href="#"></a></li> --}}
</ul>