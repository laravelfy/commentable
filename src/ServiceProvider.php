<?php
namespace Laravelfy\Commentable;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

/**
 * 可被评论的服务提供者
 */
class ServiceProvider extends IlluminateServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/resources/views/comment/' => resource_path('views/comment/'),
        ], 'laravelfy-commentable');
    }
}
