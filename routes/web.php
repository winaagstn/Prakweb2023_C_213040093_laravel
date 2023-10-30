<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Wina Agustina",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam possimus ducimus doloribus amet illum? Nam deserunt optio quae, incidunt dicta cum exercitationem quaerat odit consequatur possimus, minus eum voluptatem reiciendis vel, earum vitae sint nihil voluptatum. Voluptatum, veniam. Assumenda aliquam neque ea! Reprehenderit quo molestiae quasi incidunt ab quae quaerat voluptate nesciunt aut consectetur quibusdam ratione totam at ipsam necessitatibus pariatur autem id quisquam doloribus maiores, tempora doloremque assumenda iste. Aliquid, accusamus. Praesentium dolorum cupiditate veniam, sequi ab ratione quaerat!"
        ], 
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Wini Agstini",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae odio soluta ab odit provident iusto dolor earum doloremque labore, omnis illum perferendis deserunt similique necessitatibus exercitationem deleniti fuga facilis minus incidunt dignissimos quisquam corrupti atque animi! Voluptatum architecto culpa natus quia voluptate, dolorem earum iure hic? Repellat, illum sunt architecto ipsam cum nihil. Minus numquam id pariatur, qui ad aliquid perferendis modi dolore. Veritatis quo aspernatur totam quam quia sapiente ullam quos perferendis maxime, neque adipisci illo quibusdam odit corporis veniam fuga fugit? Quisquam iure tempore tenetur ab a facilis eveniet iste dolor eaque, cumque vel unde veniam ullam voluptates!"
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman sigle post
Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Wina Agustina",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam possimus ducimus doloribus amet illum? Nam deserunt optio quae, incidunt dicta cum exercitationem quaerat odit consequatur possimus, minus eum voluptatem reiciendis vel, earum vitae sint nihil voluptatum. Voluptatum, veniam. Assumenda aliquam neque ea! Reprehenderit quo molestiae quasi incidunt ab quae quaerat voluptate nesciunt aut consectetur quibusdam ratione totam at ipsam necessitatibus pariatur autem id quisquam doloribus maiores, tempora doloremque assumenda iste. Aliquid, accusamus. Praesentium dolorum cupiditate veniam, sequi ab ratione quaerat!"
        ], 
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Wini Agstini",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae odio soluta ab odit provident iusto dolor earum doloremque labore, omnis illum perferendis deserunt similique necessitatibus exercitationem deleniti fuga facilis minus incidunt dignissimos quisquam corrupti atque animi! Voluptatum architecto culpa natus quia voluptate, dolorem earum iure hic? Repellat, illum sunt architecto ipsam cum nihil. Minus numquam id pariatur, qui ad aliquid perferendis modi dolore. Veritatis quo aspernatur totam quam quia sapiente ullam quos perferendis maxime, neque adipisci illo quibusdam odit corporis veniam fuga fugit? Quisquam iure tempore tenetur ab a facilis eveniet iste dolor eaque, cumque vel unde veniam ullam voluptates!"
        ],
    ];

$new_post = [];
foreach($blog_posts as $post){
    if($post["slug"] === $slug){
        $new_post = $post;
    }
}

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});