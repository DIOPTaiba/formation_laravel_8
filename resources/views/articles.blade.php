@extends('layouts.app')

{{-- Si on a plusieurs @yield() on peut choisir celui à utiliser comme id dans @section('id') --}}
@section('content')
    <h1>Liste des articles</h1>
    {{-- <h2>{{ $title1 }}</h2>
    <h2>{{ $title2 }}</h2> --}}

    {{-- On utilise une boucle pour parcourir le tableau envoyé par le controlleur --}}
    @foreach ($posts as $post)
        <h3>{{ $post }}</h3>
    @endforeach
@endsection