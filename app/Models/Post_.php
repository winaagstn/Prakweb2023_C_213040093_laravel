<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Wina Agustina",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam possimus ducimus doloribus amet illum? Nam deserunt optio quae, incidunt dicta cum exercitationem quaerat odit consequatur possimus, minus eum voluptatem reiciendis vel, earum vitae sint nihil voluptatum. Voluptatum, veniam. Assumenda aliquam neque ea! Reprehenderit quo molestiae quasi incidunt ab quae quaerat voluptate nesciunt aut consectetur quibusdam ratione totam at ipsam necessitatibus pariatur autem id quisquam doloribus maiores, tempora doloremque assumenda iste. Aliquid, accusamus. Praesentium dolorum cupiditate veniam, sequi ab ratione quaerat!"
        ], 
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Indira Putri",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae odio soluta ab odit provident iusto dolor earum doloremque labore, omnis illum perferendis deserunt similique necessitatibus exercitationem deleniti fuga facilis minus incidunt dignissimos quisquam corrupti atque animi! Voluptatum architecto culpa natus quia voluptate, dolorem earum iure hic? Repellat, illum sunt architecto ipsam cum nihil. Minus numquam id pariatur, qui ad aliquid perferendis modi dolore. Veritatis quo aspernatur totam quam quia sapiente ullam quos perferendis maxime, neque adipisci illo quibusdam odit corporis veniam fuga fugit? Quisquam iure tempore tenetur ab a facilis eveniet iste dolor eaque, cumque vel unde veniam ullam voluptates!"
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
