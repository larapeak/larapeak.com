<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;

use Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::sort(request())->get();

        return Inertia::render('Posts/Index', [
            'posts' => $posts,
            'filters' => request(),
        ]);
    }

    public function create()
    {
        return Inertia::render('Posts/Create');
    }

    public function store(PostRequest $request)
    {
        $post = Auth::user()
                    ->posts()
                    ->create($request->validated());

        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        return Inertia::render('Posts/Edit', [
            'post' => $post,
        ]);
    }

    public function update(PostRequest $request, Post $post)
    {
        $post->title = $request->title;
        $post->body = $request->body;
        
        $post->save();

        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        //
    }
}
