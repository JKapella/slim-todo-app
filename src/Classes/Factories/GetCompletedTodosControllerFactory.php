<?php


namespace Todo\Factories;


use Slim\Container;
use Todo\Controllers\GetCompletedTodosController;

class GetCompletedTodosControllerFactory
{
    public function __invoke(Container $container)
    {
        $renderer = $container->get('renderer');
        $model = $container->get('homepageModel');
        return new GetCompletedTodosController($renderer, $model);
    }
}