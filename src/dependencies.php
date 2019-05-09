<?php

use Slim\App;

return function (App $app) {
    $container = $app->getContainer();

    // view renderer
    $container['renderer'] = function ($c) {
        $settings = $c->get('settings')['renderer'];
        return new \Slim\Views\PhpRenderer($settings['template_path']);
    };

    //dbConnection
    $container['dbConnection'] = function ($c) {
        $settings = $c->get('settings')['db'];
        $db = new \PDO($settings['host'].$settings['dbName'], $settings['userName']);
        $db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        return $db;
    };

    //Factories
    $container['homepageController'] = new \Todo\Factories\HomepageControllerFactory();
    $container['completeTodoController'] = new \Todo\Factories\CompleteTodoControllerFactory();
    $container['addTodoController'] = new \Todo\Factories\AddTodoControllerFactory();
    $container['getCompletedTodosController'] = new \Todo\Factories\GetCompletedTodosControllerFactory();
    $container['homepageModel'] = new \Todo\Factories\HomepageModelFactory();

    // monolog
    $container['logger'] = function ($c) {
        $settings = $c->get('settings')['logger'];
        $logger = new \Monolog\Logger($settings['name']);
        $logger->pushProcessor(new \Monolog\Processor\UidProcessor());
        $logger->pushHandler(new \Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
        return $logger;
    };
};
