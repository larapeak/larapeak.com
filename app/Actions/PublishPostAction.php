<?php

namespace App\Actions;

use App\Models\Post;

class PublishPost
{
    public function execute(Post $post)
    {
        $post->published = true;
        $post->published_at = now();

        $post->save();
    }
}