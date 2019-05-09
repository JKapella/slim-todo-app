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
}