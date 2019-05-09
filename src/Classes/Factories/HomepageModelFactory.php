<?php


namespace Todo\Factories;

use Slim\Container;
use Todo\Models\HomepageModel;

class HomepageModelFactory
{
    public function __invoke(Container $container)
    {
        $dbConnection = $container->get('dbConnection');
        return new HomepageModel($dbConnection);
    }
}