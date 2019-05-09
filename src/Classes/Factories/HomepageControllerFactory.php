<?php


namespace Todo\Factories;


use Slim\Container;
use Todo\Controllers\HomepageController;

class HomepageControllerFactory
{
    public function __invoke(Container $container)
    {
        $renderer = $container->get('renderer');
        $model = $container->get('homepageModel');
        return new HomepageController($renderer, $model);
    }
}