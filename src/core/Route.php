<?php
declare(strict_types=1);

namespace Core;

readonly class Route
{
    public string $uri;
    public string $controller;
    public string $action;

    public function __construct(string $path, string $controller, string $action)
    {
        $this->uri = $path;
        $this->controller = $controller;
        $this->action = $action;
    }
}