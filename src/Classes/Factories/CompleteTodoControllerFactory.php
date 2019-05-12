<?php


namespace Todo\Factories;


use Slim\Container;
use Todo\Controllers\CompleteTodoController;

class CompleteTodoControllerFactory
{
    public function __invoke(Container $container)
    {
        $model =  $container->get('homepageModel');
        return new CompleteTodoController($model);
    }
}