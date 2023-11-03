<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Wina Agustina",
        "email" => "winaagustina2003@gmail.com",
        "image" => "profile.jpg"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
// halaman sigle post
Route::get('posts/{post:slug}', [PostController::class, 'show']);