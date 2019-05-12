<?php


namespace Todo\Factories;


use Slim\Container;
use Todo\Controllers\AddTodoController;

class AddTodoControllerFactory
{
    public function __invoke(Container $container)
    {
        $model =  $container->get('homepageModel');
        return new AddTodoController($model);
    }
}