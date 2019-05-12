<?php


namespace Todo\Controllers;


use Todo\Models\HomepageModel;

class CompleteTodoController
{
    private $model;

    public function __construct(HomepageModel $homepageModel)
    {
        $this->model = $homepageModel;
    }

    public function __invoke($request, $response, $args)
    {
        $postData = $request->getParsedBody();
        $id = $postData['id'];
        $this->model->completeTodo($id);
        return $response->withRedirect('/');
    }
}