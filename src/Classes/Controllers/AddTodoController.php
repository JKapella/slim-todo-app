<?php


namespace Todo\Controllers;


use Todo\Models\HomepageModel;

class AddTodoController
{
    private $model;

    public function __construct(HomepageModel $homepageModel)
    {
        $this->model = $homepageModel;
    }

    public function __invoke($request, $response, $args)
    {
        $postData = $request->getParsedBody();
        $toDoMessage = $postData['message'];
        $toDoDate = $postData['due_date'];
        $this->model->addToDo($toDoMessage, $toDoDate);
        return $response->withRedirect('/');
    }
}