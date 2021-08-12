<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Pour retourner des donner directement
// Route::get('/posts', function () {
//     return "Liste articles";
// });

// Pour retourner des données au format JSON
// Route::get('/posts', function () {
//     return response()->json([
//         'title' => 'Test',
//         'desc' => 'Description article'
//     ]);
// });

// Pour retourner des donner directement
// Route::get('/articles', function () {
//     return view('articles');
// });

// Pour retourner une vue à travers le controlleur
// Route::get('/articles', 'App\Http\Controllers\PostController@index');
Route::get('/articles', [PostController::class, 'index']);

Route::get('/', [PostController::class, 'index']);
Route::get('/posts/{id}', [PostController::class, 'show']);
Route::get('/contact', [PostController::class, 'contact']);



