<?php
namespace Laravelfy\Commentable\ServiceProviders;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

/**
 * 可被评论的服务提供者
 */
class ServiceProvider extends IlluminateServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../publishes/resources/views/comment/' => resource_path('views/comment/'),
            __DIR__ . '/../../publishes/public/' => public_path('vendor/commentable/'),
            __DIR__ . '/../../publishes/databases/' => database_path(),
            __DIR__ . '/../../publishes/Requests/' => app_path('Http/Requests'),
        ], 'laravelfy-commentable');

        $this->loadRoutesFrom(__DIR__ . './../Routes/comment.php');
    }
}
