<?php
require_once __DIR__ . '/../libs/router/router.php';
require_once __DIR__ . '/controllers/DishApiController.php';
require_once __DIR__ . '/controllers/OrderApiController.php';

$router = new Router();

$router->addRoute('api/dishes', 'GET', 'DishApiController', 'getAll');
$router->addRoute('api/dishes/:id', 'GET', 'DishApiController', 'get');

$router->addRoute('api/orders', 'POST', 'OrderApiController', 'create');

$router->setDefaultRoute('DishApiController', 'getAll');

$router->route($_GET['resource'] ?? '', $_SERVER['REQUEST_METHOD']);
