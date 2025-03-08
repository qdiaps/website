<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

$uri = $_SERVER['REQUEST_URI'];

if ($uri == '/')
    echo $twig->render('home.html.twig', [
        'title' => 'Home',
    ]);
else
    echo $twig->render('404.html.twig', [
        'title' => 'Error',
    ]);