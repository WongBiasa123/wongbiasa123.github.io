<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index()
    {

        $posts = Post::latest();



        return view('MAPEL.index', [
            "title" => "All Post",
            "active" => 'posts',

            "posts" => $posts->get()
        ]);
    }

    public  function show(Post $post)
    {
        return view('MAPEL.show', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}
