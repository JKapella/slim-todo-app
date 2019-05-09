<?php


namespace Todo\Factories;


use Slim\Container;
use Todo\Controllers\AddTodoController;

class addTodoControllerFactory
{
    public function __invoke(Container $container)
    {
        $model =  $container->get('homepageModel');
        return new AddTodoController($model);
    }
}