@extends('layouts.app')

{{-- Si on a plusieurs @yield() on peut choisir celui à utiliser comme id dans @section('id') --}}
@section('content')
    <h1>Liste des articles</h1>
    {{-- <h2>{{ $title1 }}</h2>
    <h2>{{ $title2 }}</h2> --}}

    {{-- On utilise une boucle pour parcourir le tableau envoyé par le controlleur --}}
    {{-- @foreach ($posts as $post) --}}
    {{-- Pour afficher tous les champs du post --}}
        {{-- <h3>{{ $post }}</h3>  --}}
    {{-- Pour afficher uniquement le titre --}}
        {{-- <h3><a href="#">{{ $post->title }}</a></h3>  --}}
    {{-- @endforeach --}}


    {{-- On peut vérifier s'il y'a au moins 1 posts avant de boucler --}}
    @if ($posts->count() > 0)
        @foreach ($posts as $post)
        {{-- Pour afficher tous les champs du post --}}
            {{-- <h3>{{ $post }}</h3>  --}}
        {{-- Pour afficher uniquement le titre --}}
            <h3><a href="#">{{ $post->title }}</a></h3> 
        @endforeach
    @else
        <span>Aucun post trouvé en base de données</span>
    @endif
        
@endsection