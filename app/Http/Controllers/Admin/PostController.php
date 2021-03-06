<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Actions\PublishPostAction;

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

        return redirect()->route('posts.edit', $post->slug)
                            ->with('flash.banner', 'Post is created!');
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
        $post->slug = $request->slug;
        
        $post->save();

        return redirect()->route('posts.edit', $post->slug);
    }

    public function destroy(Request $request, Post $post)
    {
        $request->validate([
            'password' => 'required|string|password',
        ]);

        $post->delete();

        return redirect()->route('posts.index')
                            ->with('flash.banner', 'Post is deleted!');
    }

    public function publish(Post $post, PublishPostAction $publishPostAction)
    {
        $publishPostAction->execute($post);

        return redirect()->route('posts.edit', $post->slug);
    }
}
