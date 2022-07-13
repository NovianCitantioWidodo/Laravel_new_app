<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index() {
        $post = Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString();
        $title = "Post";

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title .= " " . "category " . $category->name;
        }

        if (request('author')) {
            $user = User::firstWhere('username', request('author'));
            $title .= " " . "by " . $user->name . " ";
        }

        return view('posts', [
            'title' => $title,
            'active' => 'post',
            'posts' => $post
        ]);
    }

    public function show(Post $post) {
        return view('post', [
            'title' => $post->title,
            'active' => 'post',
            'post' => $post
        ]);
    }
}
