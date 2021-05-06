<?php

use App\Models\User;

test('has blog index page')->get('/blog')->assertStatus(200);

test('has blog show page', function () {
    User::factory()->hasPosts([
        'title' => 'test post',
        'published_at' => now(),
    ])->create();

    $response = $this->get('/blog/test-post');

    $response->assertStatus(200);
});