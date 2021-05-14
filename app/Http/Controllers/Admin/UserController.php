<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index()
    {
        $users = User::sort(request())->get();

        return Inertia::render('Users/Index', [
            'users' => $users,
            'filters' => request(),
        ]);
    }

    public function create()
    {
        //
    }

    public function store(PostRequest $request)
    {
        //
    }

    public function edit(Post $post)
    {
        //
    }

    public function update(PostRequest $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }
}
