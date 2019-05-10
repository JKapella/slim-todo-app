<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', 'homepageController');
    $app->get('/getCompleted', 'getCompletedTodosController');
    $app->post('/addTodo', 'addTodoController');
    $app->post('/completeTodo', 'completeTodoController');
    $app->post('/deleteTodo', function () {
        echo 'TO DO Item Deleted!';
    });
};
