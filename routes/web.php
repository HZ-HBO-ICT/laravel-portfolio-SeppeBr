<?php

use Illuminate\Support\Facades\Route;

use App\http\Controllers\PostsController;

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

Route::get('/posts/{post}', [PostsController::class, 'show']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/motivatie', function () {
    return view('motivatie');
});

Route::get('/surprise', function () {
    return view('surprise');
});

Route::get('/tabel', function () {
    return view('tabel');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/blog', function () {
    return view('blog', [
        'articles' => App\models\Article::latest()->get()
    ]);
});

Route::get('/articles/{article}', [\App\Http\Controllers\ArticlesController::class, 'show']);
