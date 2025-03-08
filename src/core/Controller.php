<?php
declare(strict_types=1);

namespace Core;

abstract class Controller
{
    public function createPage(string $name, array $data = []): Page
    {
        return new Page($name, $data);
    }
}