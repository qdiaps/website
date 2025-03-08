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
            'message' => 'The page you are looking for does not exist.'
        ]);
    }

    public function actionNotFound(): Page
    {
        return $this->createPage('404.html.twig', [
            'title' => 'Error',
            'message' => 'Action not found.'
        ]);
    }

    public function exception(string $message): Page
    {
        return $this->createPage('404.html.twig', [
            'title' => 'Error',
            'message' => $message
        ]);
    }
}