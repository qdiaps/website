<?php
declare(strict_types=1);

namespace Core;

class Router
{
    public function getTrack(array $routes, string $uri): ?Track
    {
        foreach ($routes as $route) {
            if ($route->uri === $uri)
                return new Track($route->controller, $route->action);
        }

        return null;
    }
}