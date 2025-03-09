<?php
declare(strict_types=1);

namespace Core;

use App\Controllers\ErrorController;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class View
{
    private Environment $twig;

    public function __construct(string $templatePath)
    {
        $loader = new FilesystemLoader($templatePath);
        $this->twig = new Environment($loader);
    }

    public function render(?Page $page): string
    {
        if ($page === null)
            return $this->renderError();
        return $this->twig->render($page->name, $page->data);
    }

    private function renderError(): string
    {
        $page = new ErrorController()->pageNotFound();
        return $this->twig->render($page->name, $page->data);
    }
}