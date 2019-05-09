<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', 'homepageController');
    $app->post('/addTodo', function () {
        echo 'adding new todo';
    });
};
