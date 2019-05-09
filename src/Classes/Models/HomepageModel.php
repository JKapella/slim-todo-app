<?php


namespace Todo\Models;


class HomepageModel
{
    private $db;

    public function __construct(\PDO $dbConnection)
    {
        $this->db = $dbConnection;
    }

    public function getToDos()
    {
        $query= $this->db->prepare("SELECT `id`, `message` FROM `todo_table` WHERE `completed` = '0' AND `deleted` = '0';");
        $query->execute();
        return $query->fetchAll();
    }

    public function addToDo($message)
    {
        $query = $this->db->prepare("INSERT INTO `todo_table` (`message`) VALUES (:message);");
        $query->bindParam(':message', $message);
        $query->execute();
    }

    public function completeTodo($id)
    {
        $query = $this->db->prepare("UPDATE `todo_table` SET `completed` = '1' WHERE `id` = :id;");
        $query->bindParam(':id', $id);
        $query->execute();
    }
}