<?php

$router->get('/', 'App\Controllers\IndexController@index');
$router->get('/students/(\d+)', 'App\Controllers\StudentController@index');
