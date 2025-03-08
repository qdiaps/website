<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Core\Dispatcher;
use Core\Router;
use Core\View;

$routes = require __DIR__ . '/../src/config/routes.php';

$track = new Router()->getTrack($routes, $_SERVER['REQUEST_URI']);
$page = new Dispatcher()->getPage($track);

echo new View(__DIR__ . '/templates')->render($page);