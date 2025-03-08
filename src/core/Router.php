<?php
declare(strict_types=1);

namespace Core;

class Router
{
    public function getTrack(array $routes, string $uri): Track|null
    {
        foreach ($routes as $route) {
            if ($route->path === $uri) {

                return new Track($route->controller, $route->action);
            }
        }
        return null;
    }
}