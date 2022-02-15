<?php
namespace App\Kernel;

use Bramus\Router\Router;
use Illuminate\Database\Capsule\Manager as Capsule;

class Kernel {
    public function run() {

        $this->makeDbConnection();

        $router = new Router();
        require __DIR__ . '/../../routes/route.php';
        $router->run();
    }

    private function makeDbConnection() {
        $capsule = new Capsule;

        $capsule->addConnection([
            "driver" => DB_DRIVER,
            "host" => DB_HOST,
            "database" => DB_DATABASE,
            "username" => DB_USERNAME,
            "password" => DB_PASSWORD
        ]);

        //Make this Capsule instance available globally.
        $capsule->setAsGlobal();
        // Setup the Eloquent ORM.
        $capsule->bootEloquent();
    }


}