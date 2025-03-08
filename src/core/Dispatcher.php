<?php
declare(strict_types=1);

namespace Core;

use App\Controllers\ErrorController;
use Exception;

class Dispatcher
{
    public function getPage(Track|null $track): Page|null
    {
        if ($track === null)
            return null;

        $className = ucfirst($track->controller) . 'Controller';
        $fullName = 'App\\Controllers\\' . $className;
        try {
            $controller = new $fullName();

            if (method_exists($controller, $track->action))
                return $controller->{$track->action}();
            else
                return new ErrorController()->actionNotFound();
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
    }
}