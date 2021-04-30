<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(6);

        return view('front.home', [
            'posts' => $posts
        ]);
    }
}
