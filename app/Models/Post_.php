<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post //extends Model
{
    use HasFactory;

    private static $blog_post = 
    [
        [
            "judul" => "Post Pertama",
            "slug" => "post-pertama",
            "author" => "Novian Citantio",
            "isi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus dolorum voluptas, libero officia aspernatur a in quod quidem eius atque corporis eaque sapiente nobis nemo laboriosam aliquam quas quibusdam? Voluptates tempore qui minima recusandae, tempora praesentium aliquid nesciunt rerum, dignissimos voluptate dolorum, eaque optio cum ducimus. Eum iusto sequi non."
        ],
        [
            "judul" => "Post Kedua",
            "slug" => "post-kedua",
            "author" => "Novian Citantio",
            "isi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus dolorum voluptas, libero officia aspernatur a in quod quidem eius atque corporis eaque sapiente nobis nemo laboriosam aliquam quas quibusdam? Voluptates tempore qui minima recusandae, tempora praesentium aliquid nesciunt rerum, dignissimos voluptate dolorum, eaque optio cum ducimus. Eum iusto sequi non."
        ]
        
    ];

    public static function all () {
        return collect(self::$blog_post);
    }

    public static function find($slug) {
        $post = static::all();
        return $post->firstWhere('slug', $slug);
    }
}
