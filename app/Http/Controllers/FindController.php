<?php

namespace App\Http\Controllers;

use App\Models\Post;

class FindController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->filter(request()->only(['search', 'category', 'author']))->paginate(6)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [ 'post' => $post ]);
    }

}
