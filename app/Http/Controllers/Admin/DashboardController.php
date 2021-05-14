<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $users_count = User::count();
        $posts_count = Post::count();

        return Inertia::render('Dashboard', [
            'users_count' => $users_count,
            'posts_count' => $posts_count,
        ]);
    }
}
