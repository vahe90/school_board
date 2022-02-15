<?php
namespace App\Kernel;

use Bramus\Router\Router;

class Kernel {
    public function run() {
        $router = new Router();
        require __DIR__.'/../../routes/route.php';

        $router->run();
    }
}