const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

//  Laravel-mix permet de compacter les fichiers js et css en utilisant webpack
// Ici les fichiers js dans 'resources/js/app.js' sont compilés dans 'public/js'
// et les fichiers css 'resources/css/app.css' dans 'public/css'
// Et pour utiliser laravel-mix pour la compilation il faut installer Nodejs
// Puis faire un npm install pour instakler toutes les dépendances nécessaires
// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);

// On peut changer les fichiers css en scss en modifiant le postCss en sass
// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/scss/app.scss', 'public/css', [
//         //
//     ]);

// Pour utilise Tailwind CSS on utiliser les fichiers css
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
    ]);
