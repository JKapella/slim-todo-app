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
        $query= $this->db->prepare("SELECT `id`, `message`, `due_date`, `high_priority` FROM `todo_table` WHERE `completed` = '0' AND `deleted` = '0';");
        $query->execute();
        return $query->fetchAll();
    }

    public function getCompletedToDos()
    {
        $query= $this->db->prepare("SELECT `id`, `message` FROM `todo_table` WHERE `completed` = '1' AND `deleted` = '0';");
        $query->execute();
        return $query->fetchAll();
    }

    public function addToDo($message, $due_date, $high_priority)
    {
        $query = $this->db->prepare("INSERT INTO `todo_table` (`message`, `due_date`, `high_priority`) VALUES (:message, :due_date, :high_priority);");
        $query->bindParam(':message', $message);
        $query->bindParam(':due_date', $due_date);
        $query->bindParam(':high_priority', $high_priority);
        $query->execute();
    }

    public function completeTodo($id)
    {
        $query = $this->db->prepare("UPDATE `todo_table` SET `completed` = '1' WHERE `id` = :id;");
        $query->bindParam(':id', $id);
        $query->execute();
    }

    public function deleteTodo($id)
    {
        $query = $this->db->prepare("UPDATE `todo_table` SET `deleted` = '1' WHERE `id` = :id;");
        $query->bindParam(':id', $id);
        $query->execute();
    }

    public function calculateTodoOverdue($datas) {
        $date = date('Y-m-d');
        foreach ($datas as $data) {
            $data['days_left'] = $date - $data['due_date'];
        }
        return $datas;
    }
}