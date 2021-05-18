<?php

namespace App\Actions;

use App\Models\Post;

class PublishPostAction
{
    public function execute(Post $post)
    {
        $post->published = true;
        $post->published_at = now();

        $post->save();
    }
}