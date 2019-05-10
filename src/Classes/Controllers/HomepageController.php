<?php


namespace Todo\Controllers;


use Slim\Views\PhpRenderer;
use Todo\Models\HomepageModel;

class HomepageController
{
    private $renderer;
    private $homepageModel;

    public function __construct(PhpRenderer $renderer, HomepageModel $homepageModel)
    {
        $this->renderer = $renderer;
        $this->homepageModel = $homepageModel;
    }

    public function __invoke($request, $response, $args)
    {
        $data = $this->homepageModel->getToDos();
        $args['toDos'] = $this->homepageModel->calculateTodoOverdue($data);
        $this->renderer->render($response, 'homepage.phtml', $args);
    }
}