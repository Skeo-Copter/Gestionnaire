<?php

namespace Model\DbTable;

class User
{
    private $pdo;
    
    public function __construct()
    {
        $dsn='mysql:host=localhost;dbname=test;charset=utf8';
        $this->pdo = new \PDO($dsn, 'root', '');
    }
    public function findUser()
    {
        $sql = "Select * from user";
        $stmt = $this->pdo->query($sql);
        $result = array();
        foreach($stmt->fetchAll(\PDO::FETCH_ASSOC) as $row){
            $result[]= $row;
        }
        return $result;
    }
    
    public function UserTask()
    {
        $sql = "select  u.user_id, 
        u.login,
        u.status,
        t.task_id,
        t.title,
        t.description,
        t.deadline,
        t.estimated_time,
        s.description
        FROM user u
        INNER JOIN task t
            on u.user_id = t.task_id
        INNER JOIN status s
            on t.status_id = s.status_id
        WHERE u.status != 'manager'";
        
        $stmt = $this->pdo->query($sql);
        $result = array();
        foreach($stmt->fetchAll(\PDO::FETCH_ASSOC) as $row){
            $result[]= $row;
        }
        return $result;
    }
    
}