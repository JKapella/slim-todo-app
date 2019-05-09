<?php


namespace Todo\Controllers;


use Slim\Views\PhpRenderer;
use Todo\Models\HomepageModel;

class GetCompletedTodosController
{
    private $renderer;
    private $model;

    public function __construct(PhpRenderer $renderer, HomepageModel $homepageModel)
    {
        $this->renderer = $renderer;
        $this->model = $homepageModel;
    }

    public function __invoke($request, $response, $args)
    {
        $args['toDos'] = $this->model->getCompletedToDos();
        $this->renderer->render($response, 'homepage.phtml', $args);
    }
}