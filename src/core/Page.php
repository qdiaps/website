<?php
declare(strict_types=1);

namespace Core;

readonly class Page
{
    public string $name;
    public array $data;

    public function __construct(string $name, array $data)
    {
        $this->name = $name;
        $this->data = $data;
    }
}