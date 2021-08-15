<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $title1 = 'Mon titre 1';
        $title2 = 'Mon titre 2';
        // Différentes manières d'envoyer des données à la vue
        // return view('articles', compact('title1'));

        //title est la clé qu'on doit avoir dans la vue
        // return view('articles')->with('title', $title1);

        // On peut passer plusieurs données en même temps avec compact
        // return view('articles', compact('title1', 'title2'));

        // on peut aussi utilisé 1 tableau
        // return view('articles', [
        //     'title1' => $title1,
        //     'title2' => $title2,
        // ]);

        // Si on a des données qui viennent de la base de données par exemple
        // $posts = [
        //     'Mon titre N°1',
        //     'Mon titre N°2',
        // ];
        // return view('articles', compact('posts'));
        
        // On utilise Eloquent pour interagir avec la db
        
        $posts = Post::all();
        // dd($posts);
        
        return view('articles', compact('posts'));
        
    }

    public function show($id)
    {
        $posts = [
            1 => 'Mon titre N°1',
            2 => 'Mon titre N°2',
        ];

        // ?? fonction ternaire qui permet de vérifier si la première condition est vérifée sinon la deuxième sera utilisée
        $post = $posts[$id] ?? 'Ce post n\'existe pas';

        return view('article', [
            'post' => $post
        ]);
    }

    public function contact()
    {
        return view('contact');
    }
}
