<?php


namespace Todo\Factories;


use Slim\Container;
use Todo\Controllers\DeleteTodoController;

class DeleteTodoControllerFactory
{
    public function __invoke(Container $container)
    {
        $model =  $container->get('homepageModel');
        return new DeleteTodoController($model);
    }
}