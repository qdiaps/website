<?php
declare(strict_types=1);

namespace App\Controllers;

use Core\Controller;
use Core\Page;

class ErrorController extends Controller
{
    public function pageNotFound(): Page
    {
        return $this->createPage('404.html.twig', [
            'title' => 'Page not found',
        ]);
    }

    public function actionNotFound(): Page
    {
        return $this->createPage('404.html.twig', [
            'title' => 'Action not found',
        ]);
    }
}