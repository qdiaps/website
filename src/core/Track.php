<?php
declare(strict_types=1);

namespace Core;

readonly class Track
{
    public string $controller;
    public string $action;

    public function __construct(string $controller, string $action)
    {
        $this->controller = $controller;
        $this->action = $action;
    }
}