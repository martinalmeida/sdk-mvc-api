<?php

use FastRoute\RouteCollector;

return function (RouteCollector $r) {
    $r->addRoute('GET', '/api/users', ['App\controllers\UserController', 'listUsers']);
    $r->addRoute('POST', '/api/users', ['App\controllers\UserController', 'createUser']);
};
