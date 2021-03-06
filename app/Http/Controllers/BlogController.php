<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::published()->recent()->simplePaginate(10);

        return view('front.blog.index', [
            'posts' => $posts
        ]);
    }

    public function show(Request $request, Post $post)
    {
        if (!$post->published) {
            $request->session()->now('preview', '');
        }

        if (!auth()->check() && !$post->published) {
            abort(404);
        }

        return view('front.blog.show', [
            'post' => $post
        ]);
    }
}
