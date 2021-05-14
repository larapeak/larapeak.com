<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_screen_can_be_rendered()
    {
        $response = $this->get('/');
        
        $response->assertStatus(200);
    }

    public function test_only_published_posts_are_rendered()
    {
        //
    }
}