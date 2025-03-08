<?php
declare(strict_types=1);

namespace App\Controllers;

use Core\Controller;
use Core\Page;

class HomeController extends Controller
{
    public function index(): Page
    {
        return $this->createPage('home.html.twig', [
            'title' => 'Home',
        ]);
    }
}