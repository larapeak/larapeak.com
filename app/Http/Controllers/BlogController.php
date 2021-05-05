<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::published()->recent()->get();

        return view('front.blog.index', [
            'posts' => $posts
        ]);
    }

    public function show($id)
    {
        return "blog show";
    }
}
