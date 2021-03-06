<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class BladeComponentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Blade::component('front.layouts.app', 'app-layout');
    }
}